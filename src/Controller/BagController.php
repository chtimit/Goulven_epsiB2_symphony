<?php

namespace App\Controller;

use App\Entity\Soint;
use App\Repository\SointRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bag")
 */
class BagController extends AbstractController
{
    /**
     * @Route("/", name="bag_index", methods={"GET"})
     */
    public function index(SointRepository $SointRepository): Response
    {
        return $this->render('bag/index.html.twig', [
            'bag' => $SointRepository->findAll(),
        ]);
    }
    /**
     * @Route("/id/{id}", name="bag_show", methods={"GET"})
     */
    public function show(Soint $soint): Response
    {
        return $this->render('bag/show.html.twig', [
            'soint' => $soint,
        ]);
    }
}
