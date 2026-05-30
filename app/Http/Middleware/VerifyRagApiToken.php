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
        $token = config('services.rag.api_token');

        if ($token === null || $token === '') {
            return response()->json([
                'message' => 'RAG API is not configured. Set RAG_API_TOKEN in .env.',
            ], 503);
        }

        $provided = $request->bearerToken()
            ?? $request->header('X-RAG-API-Token');

        if (! is_string($provided) || ! hash_equals($token, $provided)) {
            return response()->json([
                'message' => 'Unauthorized.',
            ], 401);
        }

        return $next($request);
    }
}
