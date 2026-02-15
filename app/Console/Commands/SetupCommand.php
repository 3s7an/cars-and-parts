<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class SetupCommand extends Command
{
    protected $signature = 'setup
                            {--seed : Run database seeders after migration}
                            {--no-build : Skip npm install and npm run build}';

    protected $description = 'Setup env, dependencies, database and frontend assets';

    public function handle(): int
    {
        $this->info('Setting up project...');

        if (! file_exists(base_path('.env'))) {
            copy(base_path('.env.example'), base_path('.env'));
            $this->info('Created .env from .env.example');
        } else {
            $this->comment('.env already exists');
        }

        $envPath = base_path('.env');
        $needsKey = ! preg_match('/^APP_KEY=.+/m', file_get_contents($envPath));
        if ($needsKey) {
            $this->call('key:generate', ['--force' => true]);
        }

        $this->info('Running composer install...');
        $result = Process::path(base_path())->timeout(300)->run('composer install --no-interaction');
        if (! $result->successful()) {
            $this->error('composer install failed: '.$result->errorOutput());

            return self::FAILURE;
        }

        if (! file_exists(public_path('storage'))) {
            $this->call('storage:link');
        }

        $this->info('Running migrations...');
        if ($this->call('migrate', ['--force' => true]) !== 0) {
            $this->warn('Migration failed – check DB_* in .env (database created and credentials correct)');

            return self::FAILURE;
        }

        if ($this->option('seed')) {
            $this->call('db:seed', ['--force' => true]);
        }

        if (! $this->option('no-build')) {
            $this->info('Running npm install...');
            if (! Process::path(base_path())->timeout(300)->run('npm install')->successful()) {
                $this->error('npm install failed');

                return self::FAILURE;
            }
            $this->info('Running npm run build...');
            if (! Process::path(base_path())->timeout(300)->run('npm run build')->successful()) {
                $this->error('npm run build failed');

                return self::FAILURE;
            }
        }

        $this->info('Setup complete. Start the app with: php artisan serve');

        return self::SUCCESS;
    }
}
