<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Part;
use App\Models\PartCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RagExportTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        config(['services.n8n.api_token' => 'test-rag-token']);
    }

    public function test_categories_export_returns_search_text(): void
    {
        CarCategory::factory()->create([
            'name' => 'Nárazníky',
            'slug' => 'narazniky',
        ]);

        $response = $this->withToken('test-rag-token')
            ->getJson('/api/rag/categories');

        $response->assertOk()
            ->assertJsonFragment([
                'id' => 'car_category_1',
                'type' => 'car_category',
                'name' => 'Nárazníky',
                'slug' => 'narazniky',
                'search_text' => 'Nárazníky | narazniky',
            ]);
    }

    public function test_products_export_includes_category_links(): void
    {
        $car = Car::factory()->create(['name' => 'Škoda Octavia']);
        $part = Part::factory()->create([
            'car_id' => $car->id,
            'name' => 'Predný nárazník',
            'slug' => 'predny-naraznik',
            'description' => 'Originálny diel',
        ]);

        $category = PartCategory::factory()->create([
            'name' => 'Nárazníky',
            'slug' => 'narazniky',
        ]);
        $part->categories()->attach($category);

        $response = $this->withToken('test-rag-token')
            ->getJson('/api/rag/products');

        $response->assertOk();

        $products = collect($response->json());
        $part = $products->firstWhere('id', 'part_'.$part->id);

        $this->assertNotNull($part);
        $this->assertSame('part', $part['type']);
        $this->assertSame('Predný nárazník', $part['name']);
        $this->assertSame(['part_category_1'], $part['category_ids']);
        $this->assertSame(['narazniky'], $part['category_slugs']);
        $this->assertSame('car_1', $part['car_id']);
        $this->assertSame('Škoda Octavia', $part['car_name']);
        $this->assertSame('Predný nárazník | Originálny diel | Škoda Octavia | Kategórie: Nárazníky', $part['search_text']);
    }

    public function test_rag_export_requires_token(): void
    {
        $this->getJson('/api/rag/products')->assertUnauthorized();
    }
}
