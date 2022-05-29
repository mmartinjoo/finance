<?php

namespace App\Models\Casts;

use App\ValueObjects\MarketCap;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class MarketCapCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return MarketCap::from($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
