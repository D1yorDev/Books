<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\book\BookFactory;
use App\Component\book\BookManager;
use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookCreateAction extends AbstractController
{

    public function __construct(private readonly BookFactory $bookFactory, private readonly BookManager $bookManager)
    {
    }

    public function __invoke(Book $data): Book
    {
        $book = $this->bookFactory->creat(
            $data->getName(),
            $data->getDescription(),
            $data->getText(),
            $data->getCategory(),
            $data->getPrice()
        );
        $this->bookManager->save($book, true);

        return $book;
    }
}