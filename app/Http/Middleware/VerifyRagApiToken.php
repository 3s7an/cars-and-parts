<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyRagApiToken
{
    /**
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = config('services.n8n.api_token');

        if ($token === null || trim($token) === '') {
            return response()->json([
                'message' => 'API token is not configured - set it in .env. (N8N_RAG_API_TOKEN)',
            ], 503);
        }

        $provided = $request->bearerToken()
            ?? $request->header('X-RAG-API-Token');

        if (! is_string($provided) || ! hash_equals($token, $provided)) {
            return response()->json([
                'message' => 'Access denied - unauthorized.',
            ], 401);
        }

        return $next($request);
    }
}
