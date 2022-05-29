<?php

namespace App\Models;

use App\ValueObjects\FinancialValue;
use App\ValueObjects\Price;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function metrics(): HasMany
    {
        return $this->hasMany(Metric::class);
    }

    public function income_statements(): HasMany
    {
        return $this->hasMany(IncomeStatement::class);
    }

    public function pricePerShare(): Attribute
    {
        return new Attribute(
            get: fn (int $price) => Price::from($price),
//            set: fn (Price $price) => $price->cent,
        );
    }

    public function marketCap(): Attribute
    {
        return Attribute::make(
            get: fn (int $marketCap) => FinancialValue::from($marketCap),
//            set: fn (FinancialValue $marketCap) => $marketCap->millions,
        );
    }
}
