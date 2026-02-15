# Cars & Parts

Jednoduchá evidencia áut a dielov. Prihlásený používateľ môže pridávať autá (názov, EČV, či je evidované), ku každému autu viazať diely so sériovým číslom, filtrovať zoznamy a všetko klasicky upravovať alebo mazať.

Backend je Laravel 12, frontend Vue 3 cez Inertia, auth rieši Fortify. UI je Tailwind + shadcn-vue.

## Čo treba mať

- PHP 8.2+
- Composer
- Node.js (pre frontend build)
- MySQL alebo inú DB – v `.env.example` je nastavené MySQL a databáza `cars_parts`

## Ako to spustiť

1. Naklonuj repo, choď do priečinka projektu.
2. Skopíruj `.env.example` do `.env` a vyplň aspoň `DB_*` (databáza musí existovať).
3. Spusti:
   ```bash
   php artisan setup
   ```
   Príkaz sám spraví: vygeneruje kľúč ak chýba, `composer install`, migrácie, `storage:link`, `npm install` a `npm run build`. Ak nechceš frontend build, pridaj `--no-build`. Ak chceš seedovať DB, pridaj `--seed`.
4. Spusti server:
   ```bash
   php artisan serve
   a 
   npm run dev
   ```

## Štruktúra

- **Autá:** `Car` model, `CarController`, `CarRequest`, `CarService`. Routy pod `cars` (index, create, store, edit, update, delete). Zoznam s filtrami na názov, EČV a či je evidované.
- **Diela:** `Part` model viazaný na auto, `PartController`, `PartRequest`, `PartService`. Routy pod `parts`. Diel má názov, sériové číslo a priraďuje sa k autu. V zozname sa dá filtrovať podľa auta, názvu a sériového čísla.

Všetky relevantné routy sú chránené `auth` a `verified` middlewareom.
