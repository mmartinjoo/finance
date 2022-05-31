<?php

namespace App\Models;

use App\Models\Casts\MillionsCast;
use App\Models\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IncomeStatement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'revenue' => MillionsCast::class,
        'cost_of_revenue' => MillionsCast::class,
        'gross_profit' => MillionsCast::class,
        'operating_expenses' => MillionsCast::class,
        'operating_profit' => MillionsCast::class,
        'interest_expense' => MillionsCast::class,
        'income_tax_expense' => MillionsCast::class,
        'net_income' => MillionsCast::class,
        'eps' => PriceCast::class,
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
