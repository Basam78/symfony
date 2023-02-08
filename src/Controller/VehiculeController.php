<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vehicules')]
class VehiculeController{

    #[Route('/vehicules', name: "accueil")]
    public function index(): Response{

        return new Response('<h1>Liste des vehicules</h1>');

    }

    #[Route('/vehicules/new', name: "vehicule_new")]
    public function new(): Response{

        return new Response('Nouveau vehicules');
    }

    #[Route('/vehicules/{id}', requirements: ['id'=>'\d+'], name: "vehicule_show")]
    public function show(int $id): Response
    {
        return new Response('Detail des vehicules');
    }

    #[Route('/vehicules/{id}', requirements: ['id'=>'\d+'], name: "vehicule_modify")]
    public function modify(int $id): Response{

        return new Response('modification des vehicules');

    }
    
    #[Route('/vehicules/{id}', requirements: ['id'=>'\d+'], name: "vehicule_delete")]
    public function delete(int $id): Response{

        return new Response('supression des vehicules');

    }
}