<?php

namespace App\Http\Controllers;

use App\Http\Resources\MetricsSummaryResource;
use App\Models\Company;

class MetricController extends Controller
{
    public function index(Company $company)
    {
        return MetricsSummaryResource::make($company->metrics);
    }
}
