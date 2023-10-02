<?php

declare(strict_types=1);

namespace App\Component\user;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFactory
{

    public function __construct(private readonly UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function creat(string $email, string $password, int $age): User
    {
        $user = new User();
        $user->setEmail($email);
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);
        $user->setAge($age);

        return $user;
    }
}