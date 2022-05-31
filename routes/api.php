<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IncomeStatementController;
use App\Http\Controllers\CompanyMetricController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('companies/{company}', [CompanyController::class, 'show']);
Route::get('companies/{company}/income-statements', [IncomeStatementController::class, 'index']);
Route::get('companies/{company}/metrics', [CompanyMetricController::class, 'index']);
