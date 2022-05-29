<?php

namespace App\ValueObjects;

class FinancialValue
{
    public readonly int $raw;
    public readonly int $millions;
    public readonly string $formatted;
    public readonly string $millions_formatted;
    public readonly string $billions_formatted;
    public readonly string $trillions_formatted;

    public function __construct(int $millions)
    {
        $this->raw = $millions * 1_000_000;

        $this->millions = $millions;

        $this->formatted = number_format($this->millions, 0, ',');

        $this->millions_formatted = $this->millions . 'M';

        $this->billions_formatted = ($this->millions / 1_000) . 'B';

        $this->trillions_formatted = ($this->millions / 1_000_000) . 'T';
    }

    public static function from(int $short): self
    {
        return new self($short);
    }
}
