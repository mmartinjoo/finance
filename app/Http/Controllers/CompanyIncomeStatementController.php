<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyIncomeStatementResource;
use App\Models\Company;

class CompanyIncomeStatementController extends Controller
{
    public function index(Company $company)
    {
        return CompanyIncomeStatementResource::make($company);
    }
}
