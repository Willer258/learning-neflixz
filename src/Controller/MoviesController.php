<?php

namespace App\Controller;

use App\Entity\Movies;
use App\Form\MovieFormType;
use App\Repository\MoviesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{

    private $movieRepository;
    public function __construct(MoviesRepository $movieRepository)
    {

        $this->movieRepository = $movieRepository;
    }

    #[Route('/movies', methods: ['GET', 'HEAD'], name: 'movies')]
    public function index(): Response
    {

        $movies = $this->movieRepository->findAll();


        return $this->render('base.html.twig', ['movies' => $movies]);
    }

       
    #[Route('/movies/create', name: 'create_movie')]
    public function create(): Response
    {

        $movie = new Movies();
        $form = $this->createForm(MovieFormType::class, $movie);

        return $this->render('create.html.twig', ['form' => $form->createView()]);
    }
    

    #[Route('/movies/{id}', methods: ['GET'], name: 'movie')]
    public function show($id): Response
    {

        $movie = $this->movieRepository->find($id);


        return $this->render('show.html.twig', ['movie' => $movie]);
    }



 
}
