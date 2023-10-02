<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\user\MaxAgeDTO;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserGetMaxAgeAction extends AbstractController
{
    public function __invoke(UserRepository $userRepository): MaxAgeDTO
    {
        return new MaxAgeDTO($userRepository->findMaxAge());
    }
}