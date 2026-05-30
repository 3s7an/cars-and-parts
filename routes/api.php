<?php

use App\Http\Controllers\Api\RagExportController;
use App\Http\Middleware\VerifyRagApiToken;
use Illuminate\Support\Facades\Route;

Route::middleware(VerifyRagApiToken::class)->prefix('rag')->group(function () {
    Route::get('categories', [RagExportController::class, 'categories'])->name('api.rag.categories');
    Route::get('products', [RagExportController::class, 'products'])->name('api.rag.products');
});
