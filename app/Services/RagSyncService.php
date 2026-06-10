<?php

namespace App\Services;

use App\Exceptions\RagSyncNotConfiguredException;
use App\Exceptions\RagSyncRequestException;
use App\Jobs\SyncRagDocumentJob;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RagSyncService
{
    public function isConfigured(): bool
    {
        return filled(config('services.n8n.rag_sync_webhook_url'))
            && filled(config('services.n8n.api_token'));
    }

    /**
     * @param  list<array<string, mixed>>  $documents
     * @param  list<string>  $deleteIds
     */
    public function sync(string $action, array $documents = [], array $deleteIds = []): void
    {
        if (! $this->isConfigured()) {
            throw new RagSyncNotConfiguredException(
                'RAG sync is not configured. Set N8N_RAG_SYNC_WEBHOOK_URL and N8N_RAG_API_TOKEN.'
            );
        }

        $payload = [
            'action' => $action,
            'documents' => $documents,
            'delete_ids' => $deleteIds,
        ];

        try {
            $response = Http::timeout(30)
                ->acceptJson()
                ->withHeaders([
                    'X-Webhook-Secret' => config('services.n8n.api_token'),
                ])
                ->post(config('services.n8n.rag_sync_webhook_url'), $payload);

            $response->throw();
        } catch (ConnectionException $e) {
            Log::error('RAG sync connection failed', [
                'action' => $action,
                'error' => $e->getMessage(),
            ]);

            throw new RagSyncRequestException(
                'RAG sync connection failed: could not reach n8n webhook.',
                previous: $e,
            );

        } catch (RequestException $e) {
            Log::error('RAG sync webhook failed', [
                'action' => $action,
                'status' => $e->response?->status(),
                'body' => $e->response?->body(),
            ]);

            throw new RagSyncRequestException('RAG sync webhook returned an error.', 0, $e);
        }
    }

    public function queue(string $action, array $documents = [], array $deleteIds = []): void
    {
        if (! $this->isConfigured()) {
            return;
        }

        SyncRagDocumentJob::dispatch($action, $documents, $deleteIds);
    }
}
