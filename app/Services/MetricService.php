<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Arr;

class MetricService
{
    public function getMetrics(Company $company): array
    {
        $data = [];

        $data['years'] = $company->metrics->pluck('year');

        foreach ($company->metrics as $metric) {
            foreach ($metric->getAttributes() as $attribute => $value) {
                if (in_array($attribute, ['id', 'year', 'company_id', 'created_at', 'updated_at'])) {
                    continue;
                }

                Arr::set($data, "{$attribute}.{$metric->year}", $metric->{$attribute});
            }
        }

        return $data;
    }
}
