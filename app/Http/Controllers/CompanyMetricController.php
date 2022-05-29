<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyMetricResource;
use App\Models\Company;

class CompanyMetricController extends Controller
{
    public function index(Company $company)
    {
        return CompanyMetricResource::make($company);
    }
}
