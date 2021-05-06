<?php declare(strict_types=1);

namespace App\Service;

class IsQix
{
    private int $number;

    public function __construct(int $number)
    {

        $this->number = $number;

    }
    public function isQix(): ?string
    {
        return $this->number < 0  ? null : ($this->number % 7 === 0 ? 'Qix':null);
    }

}