<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ShopperChatController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:2000'],
            'session_id' => ['nullable', 'string', 'max:128'],
        ]);

        $webhookUrl = config('services.n8n.chat_webhook_url');

        if (blank($webhookUrl)) {
            return response()->json([
                'message' => 'Chat nie je nakonfigurovaný. Nastav N8N_CHAT_WEBHOOK_URL v .env.',
            ], 503);
        }

        $sessionId = $validated['session_id'] ?? Str::uuid()->toString();

        try {
            $response = Http::timeout(120)
                ->acceptJson()
                ->post($webhookUrl, [
                    'chatInput' => $validated['message'],
                    'sessionId' => $sessionId,
                ]);
        } catch (ConnectionException) {
            return response()->json([
                'message' => 'Nepodarilo sa spojiť s chat službou. Skús to znova neskôr.',
            ], 502);
        }

        if (! $response->successful()) {
            return response()->json([
                'message' => 'Chat služba vrátila chybu. Skús to znova.',
            ], 502);
        }

        $payload = $response->json() ?? [];
        $reply = $this->extractReply($payload);

        if ($reply === null) {
            return response()->json([
                'message' => 'Neočakávaná odpoveď chat služby.',
            ], 502);
        }

        return response()->json([
            'reply' => $reply,
            'session_id' => $sessionId,
        ]);
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function extractReply(array $payload): ?string
    {
        foreach (['output', 'text', 'message', 'reply'] as $key) {
            if (isset($payload[$key]) && is_string($payload[$key]) && trim($payload[$key]) !== '') {
                return trim($payload[$key]);
            }
        }

        if (isset($payload['data']) && is_array($payload['data'])) {
            return $this->extractReply($payload['data']);
        }

        return null;
    }
}
