<?php

namespace App\Models;

use App\Models\Casts\MarginCast;
use App\Models\Casts\PeRatioCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Metric extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'gross_margin' => MarginCast::class,
        'operating_margin' => MarginCast::class,
        'profit_margin' => MarginCast::class,
        'pe_ratio' => PeRatioCast::class,
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function getTopAndBottomLine(IncomeStatement $incomeStatement, string $metricName): array
    {
        return match ($metricName) {
            'gross_margin' => [$incomeStatement->revenue, $incomeStatement->gross_profit],
            'operating_margin' => [$incomeStatement->revenue, $incomeStatement->operating_profit],
            'profit_margin' => [$incomeStatement->revenue, $incomeStatement->net_income],
        };
    }
}
