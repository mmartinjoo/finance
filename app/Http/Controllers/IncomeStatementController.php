<?php

namespace App\Http\Controllers;

use App\Http\Resources\IncomeStatementResource;
use App\Models\Company;

class IncomeStatementController extends Controller
{
    public function index(Company $company)
    {
        return IncomeStatementResource::make($company);
    }
}
