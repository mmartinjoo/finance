<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class IncomeStatementsSummaryResource extends JsonResource
{
    public $preserveKeys = true;

    public function toArray($request)
    {
        $years = $this->pluck('year');

        return [
            'years' => $years,
            'items' => [
                'revenue' => $this->getItem('revenue', $years),
                'cost_of_revenue' => $this->getItem('cost_of_revenue', $years),
                'gross_profit' => $this->getItem('gross_profit', $years),
                'operating_expenses' => $this->getItem('operating_expenses', $years),
                'operating_profit' => $this->getItem('operating_profit', $years),
                'interest_expense' => $this->getItem('interest_expense', $years),
                'income_tax_expense' => $this->getItem('income_tax_expense', $years),
                'net_income' => $this->getItem('net_income', $years),
                'eps' => $this->getItem('eps', $years),
            ]
        ];
    }

    private function getItem(string $name, Collection $years): array
    {
        $data = [];

        foreach ($years as $year) {
            $data[$year] = $this->where('year', $year)->first()->{$name};
        }

        return $data;
    }
}
