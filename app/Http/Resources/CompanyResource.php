<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ticker' => $this->ticker,
            'name' => $this->name,
            'price_per_share' => $this->price_per_share,
            'market_cap' => $this->market_cap,
        ];
    }
}
