<?php

namespace App\Http\Resources;

use App\Services\MetricService;
use Illuminate\Http\Resources\Json\JsonResource;

class MetricResource extends JsonResource
{
    public $preserveKeys = true;

    public function toArray($request)
    {
        $metricService = app(MetricService::class);

        return $metricService->getMetrics($this->resource);
    }
}
