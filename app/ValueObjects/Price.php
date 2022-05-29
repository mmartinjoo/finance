<?php

namespace App\ValueObjects;

class Price
{
    public readonly int $cent;
    public readonly float $dollar;
    public readonly string $formatted;

    public function __construct(int $cent)
    {
        $this->cent = $cent;

        $this->dollar = $cent / 100;

        $this->formatted = '$' . number_format($this->dollar, 2);
    }

    public static function from(int $cent): self
    {
        return new self($cent);
    }
}
