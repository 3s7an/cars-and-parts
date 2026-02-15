<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_create_a_car()
    {
        $response = $this->post(route('cars.store'), [
            'name' => 'My Car',
            'is_registered' => false,
        ]);

        $response->assertRedirect(route('login'));
        $this->assertDatabaseMissing('cars', ['name' => 'My Car']);
    }

    public function test_authenticated_user_can_create_a_car()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('cars.store'), [
            'name' => 'Test Car',
            'is_registered' => false,
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('cars', ['name' => 'Test Car']);
    }

    public function test_authenticated_user_can_update_a_car_keeping_same_registration_number()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $car = Car::factory()->registered()->create([
            'name' => 'Original Name',
            'registration_number' => 'AB123456',
        ]);

        $response = $this->put(route('cars.update', $car), [
            'name' => 'Updated Name',
            'is_registered' => true,
            'registration_number' => 'AB123456',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
        $car->refresh();
        $this->assertSame('Updated Name', $car->name);
        $this->assertSame('AB123456', $car->registration_number);
    }
}
