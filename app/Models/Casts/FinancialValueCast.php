<?php

namespace App\Models\Casts;

use App\ValueObjects\FinancialValue;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class FinancialValueCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return FinancialValue::from($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
