<?php

namespace App\Models;

use App\Models\Casts\FinancialValueCast;
use App\Models\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'price_per_share' => PriceCast::class,
        'market_cap' => FinancialValueCast::class,
    ];

    public function metrics(): HasMany
    {
        return $this->hasMany(Metric::class);
    }

    public function income_statements(): HasMany
    {
        return $this->hasMany(IncomeStatement::class);
    }
}
