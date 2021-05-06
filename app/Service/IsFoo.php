<?php declare(strict_types=1);

namespace App\Service;

class IsFoo
{
    private int $number;

    public function __construct(int $number)
    {

        $this->number = $number;

    }
    public function isFoo(): ?string
    {
        return $this->number < 0  ? null : ($this->number % 3 === 0 ? 'Foo':null);
    }

}