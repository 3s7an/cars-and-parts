<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RagDocumentExportService;
use Illuminate\Http\JsonResponse;

class RagExportController extends Controller
{
    public function categories(RagDocumentExportService $exportService): JsonResponse
    {
        return response()->json($exportService->exportCategories());
    }

    public function products(RagDocumentExportService $exportService): JsonResponse
    {
        return response()->json($exportService->exportProducts());
    }
}
