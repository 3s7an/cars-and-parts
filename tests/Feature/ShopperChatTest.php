<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ShopperChatTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_use_shopper_chat(): void
    {
        $response = $this->postJson(route('shopper-chat'), [
            'message' => 'Ahoj',
        ]);

        $response->assertUnauthorized();
    }

    public function test_authenticated_user_receives_reply_from_n8n_proxy(): void
    {
        config(['services.n8n.chat_webhook_url' => 'https://n8n.example/webhook/chat']);

        Http::fake([
            'https://n8n.example/webhook/chat' => Http::response([
                'output' => 'Máme brzdové platničky pre Octaviu.',
            ], 200),
        ]);

        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson(route('shopper-chat'), [
            'message' => 'Hľadám brzdy',
            'session_id' => 'test-session-123',
        ]);

        $response->assertOk();
        $response->assertJson([
            'reply' => 'Máme brzdové platničky pre Octaviu.',
            'session_id' => 'test-session-123',
        ]);

        Http::assertSent(function ($request) {
            return $request->url() === 'https://n8n.example/webhook/chat'
                && $request['chatInput'] === 'Hľadám brzdy'
                && $request['sessionId'] === 'test-session-123';
        });
    }

    public function test_returns_service_unavailable_when_webhook_not_configured(): void
    {
        config(['services.n8n.chat_webhook_url' => null]);

        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson(route('shopper-chat'), [
            'message' => 'Ahoj',
        ]);

        $response->assertStatus(503);
    }
}
