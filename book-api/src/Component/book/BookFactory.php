<?php

declare(strict_types=1);

namespace App\Component\book;


use App\Entity\Book;
use App\Entity\Category;

class BookFactory
{

    public function creat(string $name, string $description, string $text, Category $category, int $price): Book
    {
        $book = new Book();
        $book->setName($name);
        $book->setDescription($description);
        $book->setText($text);
        $book->setCategory($category);
        $book->setPrice($price);

        return $book;
    }
}