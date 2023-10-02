<?php

declare(strict_types=1);

namespace App\Component\book;

use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;

class BookManager
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    public function save(Book $book, bool $isNeedFlush = false):void
    {
        $this->entityManager->persist($book);

        if ($isNeedFlush) {
            $this->entityManager->flush();
        }
    }
}