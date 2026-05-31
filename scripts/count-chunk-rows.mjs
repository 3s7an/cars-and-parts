import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const dir = path.join(__dirname, 'reindex-chunks');

let categories = 0;
let products = 0;

for (let i = 0; i <= 42; i++) {
    const sql = fs.readFileSync(path.join(dir, `chunk-${String(i).padStart(3, '0')}.sql`), 'utf8');
    const table = sql.includes('public.categories') ? 'categories' : 'products';
    const jsonStart = sql.indexOf("jsonb_to_recordset('") + 19;
    const jsonEnd = sql.lastIndexOf("'::jsonb)");
    const jsonStr = sql.slice(jsonStart, jsonEnd).replace(/''/g, "'");
    const rows = JSON.parse(jsonStr);
    if (table === 'categories') {
        categories += rows.length;
    } else {
        products += rows.length;
    }
}

console.log(JSON.stringify({ expected_categories: categories, expected_products: products, total_chunks: 43 }, null, 2));
