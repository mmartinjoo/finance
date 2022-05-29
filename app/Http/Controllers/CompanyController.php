<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    public function show(Company $company)
    {
        return CompanyResource::make($company);
    }
}
