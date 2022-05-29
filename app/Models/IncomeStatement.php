<?php

namespace App\Models;

use App\Models\Casts\FinancialValueCast;
use App\Models\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IncomeStatement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'revenue' => FinancialValueCast::class,
        'cost_of_revenue' => FinancialValueCast::class,
        'gross_profit' => FinancialValueCast::class,
        'operating_expenses' => FinancialValueCast::class,
        'operating_profit' => FinancialValueCast::class,
        'interest_expense' => FinancialValueCast::class,
        'income_tax_expense' => FinancialValueCast::class,
        'net_income' => FinancialValueCast::class,
        'eps' => PriceCast::class,
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
