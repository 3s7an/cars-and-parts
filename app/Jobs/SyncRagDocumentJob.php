<?php

namespace App\Jobs;

use App\Services\RagSyncService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class SyncRagDocumentJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $action,
        public array $documents = [],
        public array $deleteIds = [],
    ) {}

    /**
     * Execute the job.
     */
    public function handle(RagSyncService $ragSyncService): void
    {
        $ragSyncService->sync($this->action, $this->documents, $this->deleteIds);
    }

    public function failed(?\Throwable $e): void
    {
        Log::error('RAG sync job failed permanently', [
            'action' => $this->action,
            'delete_ids' => $this->deleteIds,
            'documents' => $this->documents,
            'error' => $e?->getMessage(),
        ]);
    }
}
