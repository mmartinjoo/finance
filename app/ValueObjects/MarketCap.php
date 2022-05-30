<?php

namespace App\ValueObjects;

class MarketCap
{
    public readonly int $millions;
    public readonly string $formatted;

    public function __construct(int $millions)
    {
        $this->millions = $millions;

        // Trillions
        if ($millions >= 1_000_000) {
            $this->formatted = number_format($this->millions / 1_000_000, 2, '.') . 'T';
        }

        // Billions
        if ($millions < 1_000_000 && $millions >= 1_000) {
            $this->formatted = number_format($this->millions / 1_000, 1, '.') . 'B';
        }

        // Millions
        if ($millions < 1_000) {
            $this->formatted = number_format($this->millions) . 'M';
        }
    }

    public static function from(int $millions): self
    {
        return new self($millions);
    }
}
