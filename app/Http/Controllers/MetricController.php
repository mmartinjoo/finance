<?php

namespace App\Http\Controllers;

use App\Http\Resources\MetricResource;
use App\Models\Company;

class MetricController extends Controller
{
    public function index(Company $company)
    {
        return MetricResource::make($company);
    }
}
