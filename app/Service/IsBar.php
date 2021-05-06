<?php declare(strict_types=1);

namespace App\Service;

class IsBar
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function isBar(): ?string
    {
        return $this->number < 0 ? null : ($this->number % 5 === 0 ? 'Bar':null);

    }

}