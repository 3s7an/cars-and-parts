# Cars & Parts

Jednoduchá evidencia áut a dielov. Prihlásený používateľ môže pridávať autá (názov, EČV, či je evidované), ku každému autu viazať diely so sériovým číslom, filtrovať zoznamy a všetko klasicky upravovať alebo mazať.

Backend je Laravel 12, frontend Vue 3 cez Inertia, auth rieši Fortify. UI je Tailwind + shadcn-vue.

## Požiadavky

- PHP 8.2+
- Composer
- Node.js (pre frontend build)
- MySQL alebo inú DB – v `.env.example` je nastavené MySQL a databáza `cars_parts`

## Ako to spustiť

1. Naklonuj repo, choď do priečinka projektu.
2. Spusti:
   ```bash
   composer install
   ```
3. Spusti setup:
   ```bash
   php artisan setup
   ```
   Príkaz sám spraví: skopíruje `.env.example` do `.env` (ak `.env` ešte neexistuje), vygeneruje kľúč ak chýba, migrácie, `storage:link`, `npm install` a `npm run build`. Pred prvým spustením alebo po ňom uprav `.env` a vyplň `DB_*` (databáza musí existovať). Ak nechceš frontend build, pridaj `--no-build`. Ak chceš seedovať DB, pridaj `--seed`.
4. Spusti server:
   ```bash
   php artisan serve
   ```

Všetky relevantné routy sú chránené `auth` a `verified` middlewareom.
