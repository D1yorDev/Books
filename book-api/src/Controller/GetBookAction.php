<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GetBookAction extends AbstractController
{
    public function __invoke(BookRepository $bookRepository)
    {
        $book = $bookRepository->find(2);

        $book= $bookRepository->findOneBy([
            'name' => 'string',
            'description' => 'string'
        ]);

        $book = $bookRepository->findBy([
            'name' => 'PHP'
        ]);

        $book = $bookRepository->findOneByName('QVZ');
    }
}