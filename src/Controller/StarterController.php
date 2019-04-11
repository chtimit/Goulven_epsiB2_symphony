<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/starter")
 */
class StarterController extends AbstractController
{
    /**
     * @Route("/", name="starter_index", methods={"GET"})
     */
    public function index(): Response
    {
    	$pokemonStart = $this->getDoctrine()->getRepository(Pokemon::class)->findStarter();
        return $this->render('starter/index.html.twig', [
            'pokemon' => $pokemonStart,
        ]);
    }
}
