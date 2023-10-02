<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\user\FullNameDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

class UserFullNameAction extends AbstractController
{
    public function __invoke(Request $request, SerializerInterface $serializer) :FullNameDTO
    {
        /**@var FullNameDTO $data */
        $data = $serializer->deserialize($request->getContent(), FullNameDTO::class, 'json');

        return $data;
    }
}