<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\Part;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PartTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_create_a_part()
    {
        $car = Car::factory()->create();

        $response = $this->post(route('parts.store'), [
            'name' => 'Brake disc',
            'serial_number' => 'SN123456',
            'car_id' => $car->id,
        ]);

        $response->assertRedirect(route('login'));
        $this->assertDatabaseMissing('parts', ['serial_number' => 'SN123456']);
    }

    public function test_authenticated_user_can_create_a_part()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $car = Car::factory()->create();

        $response = $this->post(route('parts.store'), [
            'name' => 'Air filter',
            'serial_number' => 'AF999999',
            'car_id' => $car->id,
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('parts', [
            'name' => 'Air filter',
            'serial_number' => 'AF999999',
            'car_id' => $car->id,
        ]);
    }

    public function test_authenticated_user_can_update_a_part_keeping_same_serial_number()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $car = Car::factory()->create();
        $part = Part::factory()->create([
            'car_id' => $car->id,
            'name' => 'Old Part',
            'serial_number' => 'SN000001',
        ]);

        $response = $this->put(route('parts.update', $part), [
            'name' => 'Updated Part Name',
            'serial_number' => 'SN000001',
            'car_id' => $car->id,
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
        $part->refresh();
        $this->assertSame('Updated Part Name', $part->name);
        $this->assertSame('SN000001', $part->serial_number);
    }
}
