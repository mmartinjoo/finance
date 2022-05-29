<?php

namespace App\Models\Casts;

use App\ValueObjects\Price;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class PriceCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return Price::from($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
