<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Arr;

class IncomeStatementService
{
    public function getIncomeStatements(Company $company): array
    {
        $data = [];

        $data['years'] = $company->income_statements->pluck('year');

        foreach ($company->income_statements as $incomeStatement) {
            foreach ($incomeStatement->getAttributes() as $attribute => $value) {
                if (in_array($attribute, ['id', 'year', 'company_id', 'created_at', 'updated_at'])) {
                    continue;
                }

                Arr::set($data, "{$attribute}.{$incomeStatement->year}", $incomeStatement->{$attribute});
            }
        }

        return $data;
    }
}
