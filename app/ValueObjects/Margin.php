<?php

namespace App\ValueObjects;

class Margin
{
    public readonly float $value;
    public readonly string $formatted;
    public readonly FinancialValue $top_line;
    public readonly FinancialValue $bottom_line;

    public function __construct(float $value, FinancialValue $topLine, FinancialValue $bottomLine)
    {
        $this->value = $value;

        $this->top_line = $topLine;

        $this->bottom_line = $bottomLine;

        $this->formatted = number_format($value * 100, 2, '.') . '%';
    }

    public static function from(float $value, FinancialValue $topLine, FinancialValue $bottomLine): self
    {
        return new self($value, $topLine, $bottomLine);
    }
}
