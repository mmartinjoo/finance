<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('companies/{company}', [CompanyController::class, 'show']);
Route::get('companies/{company}/income-statements');
Route::get('companies/{company}/metrics');
