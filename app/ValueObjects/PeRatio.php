<?php

namespace App\ValueObjects;

class PeRatio
{
    public readonly string $value;

    public function __construct(int $peRatio)
    {
        $this->value = number_format($peRatio / 100, 2, '.');
    }

    public static function from(int $peRatio): self
    {
        return new self($peRatio);
    }
}
