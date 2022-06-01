<?php

namespace App\Http\Controllers;

use App\Http\Resources\IncomeStatementsSummaryResource;
use App\Models\Company;

class IncomeStatementController extends Controller
{
    public function index(Company $company)
    {
        return IncomeStatementsSummaryResource::make($company->income_statements);
    }
}
