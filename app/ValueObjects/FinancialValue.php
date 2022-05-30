<?php

namespace App\ValueObjects;

class FinancialValue
{
    public readonly int $value;
    public readonly int $millions;
    public readonly string $formatted;

    public function __construct(int $millions)
    {
        $this->value = $millions * 1_000_000;

        $this->millions = $millions;

        $this->formatted = number_format($this->millions, 0, ',');
    }

    public static function from(int $short): self
    {
        return new self($short);
    }
}
