<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\user\UserFactory;
use App\Component\user\UserManager;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserCreateAction extends AbstractController
{

    public function __construct(private readonly UserFactory $userFactory, private readonly UserManager $userManager)
    {
    }

    public function __invoke(User $data): User
    {
        $user = $this->userFactory->creat($data->getEmail(), $data->getPassword(), $data->getAge());
        $this->userManager->save($user, true);

        return $user;
    }
}