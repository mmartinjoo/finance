<?php

namespace App\Models\Casts;

use App\ValueObjects\Margin;
use App\ValueObjects\PeRatio;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class PeRatioCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return PeRatio::from($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
