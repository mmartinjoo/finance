<?php

namespace App\ValueObjects;

class Margin
{
    public readonly float $value;
    public readonly string $formatted;
    public readonly Millions $top_line;
    public readonly Millions $bottom_line;

    public function __construct(float $value, Millions $topLine, Millions $bottomLine)
    {
        $this->value = $value;

        $this->top_line = $topLine;

        $this->bottom_line = $bottomLine;

        $this->formatted = number_format($value * 100, 2, '.') . '%';
    }

    public static function make(float $value, Millions $topLine, Millions $bottomLine): self
    {
        return new self($value, $topLine, $bottomLine);
    }
}
