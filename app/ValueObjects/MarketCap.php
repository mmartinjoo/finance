<?php

namespace App\ValueObjects;

class MarketCap
{
    public readonly int $millions;
    public readonly string $millions_formatted;
    public readonly string $billions_formatted;
    public readonly string $trillions_formatted;

    public function __construct(int $millions)
    {
        $this->millions = $millions;

        $this->millions_formatted = number_format($this->millions) . 'M';

        $this->billions_formatted = number_format($this->millions / 1_000, 1, '.') . 'B';

        $this->trillions_formatted = number_format($this->millions / 1_000_000, 2, '.') . 'T';
    }

    public static function from(int $millions): self
    {
        return new self($millions);
    }
}
