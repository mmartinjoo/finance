<?php

namespace App\Models\Casts;

use App\ValueObjects\Margin;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class MarginCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        $incomeStatement = $model->company->income_statements()->where('year', $model->year)->first();

        [$topLine, $bottomLine] = $model->getTopAndBottomLine($incomeStatement, $key);

        return Margin::make($value, $topLine, $bottomLine);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}
