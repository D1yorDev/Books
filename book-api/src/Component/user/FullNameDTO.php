<?php

declare(strict_types=1);

namespace App\Component\user;

use Symfony\Component\Serializer\Annotation\Groups;

class FullNameDTO
{
    public function __construct(
        #[Groups(['user:read', 'user:write'])]
        private readonly string $givenName,

        #[Groups(['user:write'])]
        private readonly string $familyName,

        #[Groups(['user:write'])]
        private readonly int    $age
    )
    {
    }

    public function getGivenName(): string
    {
        return $this->givenName;
    }

    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}