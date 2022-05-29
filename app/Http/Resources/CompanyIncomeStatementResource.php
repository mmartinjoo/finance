<?php

namespace App\Http\Resources;

use App\Services\IncomeStatementService;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyIncomeStatementResource extends JsonResource
{
    public $preserveKeys = true;

    public function toArray($request)
    {
        $incomeStatementService = app(IncomeStatementService::class);

        return $incomeStatementService->getIncomeStatements($this->resource);
    }
}
