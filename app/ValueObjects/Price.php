<?php

namespace App\ValueObjects;

class Price
{
    public readonly int $cent;
    public readonly float $dollar;

    public function __construct(int $cent)
    {
        $this->cent = $cent;

        $this->dollar = $cent / 100;
    }

    public static function from(int $cent): self
    {
        return new static($cent);
    }
}
