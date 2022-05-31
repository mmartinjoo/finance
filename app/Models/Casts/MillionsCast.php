<?php

namespace App\Models\Casts;

use App\ValueObjects\Millions;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class MillionsCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return Millions::from($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
