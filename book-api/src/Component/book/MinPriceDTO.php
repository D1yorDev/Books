<?php

declare(strict_types=1);

namespace App\Component\book;

use Symfony\Component\Serializer\Annotation\Groups;

class MinPriceDTO
{
    public function __construct(
        #[Groups('book:read')]
        private readonly int $minPrice
    ) {
    }

    public function getMinPrice(): int
    {
        return $this->minPrice;
    }
}