<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class MetricsSummaryResource extends JsonResource
{
    public $preserveKeys = true;

    public function toArray($request)
    {
        $years = $this->pluck('year');

        return [
            'years' => $years,
            'items' => [
                'gross_margin' => $this->getItem('gross_margin', $years),
                'operating_margin' => $this->getItem('operating_margin', $years),
                'profit_margin' => $this->getItem('profit_margin', $years),
                'pe_ratio' => $this->getItem('pe_ratio', $years),
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
