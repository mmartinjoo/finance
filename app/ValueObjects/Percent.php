<?php

namespace App\ValueObjects;

class Percent
{
    public function __construct(public readonly ?float $value)
    {
    }

    public static function from(?float $value): self
    {
        return new self($value);
    }
}
