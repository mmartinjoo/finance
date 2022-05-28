<?php

namespace App\ValueObjects;

class Millions
{
    public readonly int $short;
    public readonly int $long;

    public function __construct(int $short)
    {
        $this->short = $short;

        $this->long = $short * 1_000_000;
    }

    public static function from(int $short): self
    {
        return new static($short);
    }
}
