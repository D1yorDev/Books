<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\book\MaxPriceDTO;
use App\Component\book\MinPriceDTO;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookGetMinPriceAction extends AbstractController
{
    public function __invoke(BookRepository $bookRepository): MinPriceDTO
    {
        return new MinPriceDTO($bookRepository->findMinPrice());
    }
}