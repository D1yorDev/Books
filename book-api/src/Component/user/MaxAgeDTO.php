<?php

declare(strict_types=1);

namespace App\Component\user;

use Symfony\Component\Serializer\Annotation\Groups;

class MaxAgeDTO
{
    public function __construct(
        #[Groups('user:read')]
        private readonly int $maxAge
    ) {
    }

    public function getMaxAge(): int
    {
        return $this->maxAge;
    }
}