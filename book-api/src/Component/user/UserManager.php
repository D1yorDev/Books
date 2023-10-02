<?php

declare(strict_types=1);

namespace App\Component\user;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class UserManager
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    public function save(User $user, bool $isNeedFlush = false):void
    {
        $this->entityManager->persist($user);

        if ($isNeedFlush) {
            $this->entityManager->flush();
        }
    }
}