<?php

declare(strict_types=1);

namespace App\Component\book;

use Symfony\Component\Serializer\Annotation\Groups;

class MaxPriceDTO
{
    public function __construct(
        #[Groups('book:read')]
        private readonly int $maxPrice
    ) {
    }

    public function getMaxPrice(): int
    {
        return $this->maxPrice;
    }
}