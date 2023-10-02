<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\book\MaxPriceDTO;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookGetMaxPriceAction extends AbstractController
{
    public function __invoke(BookRepository $bookRepository): MaxPriceDTO
    {
        return new MaxPriceDTO($bookRepository->findMaxPrice());
    }
}