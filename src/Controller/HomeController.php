<?php

namespace App\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: "home")]
    public function index(): Response
    {
        $tableau = ['a','b','c'];

        $objet = new stdClass();

        $compte = new stdClass();
        $compte->login = 'tutu';
        $compte->password = 'tutu';

        $liste = [
            ['login'=>'toto', 'password' => 'azerty'],
            ['login'=>'titi', 'password' => 'qsdfghh'],
            ['login'=>'tata', 'password' => 'admin'],
            $compte,
        ];

        $objet->nom = "Dupont";

    $objet->prenom = "paul";

        dd($objet);

        return $this->render('home/homepage.html.twig',[
        'titre'=> 'je suis la page d\'accueil',
        'tableau' => $tableau,
        'personne' => $objet,
        'personne' => $liste,
        
       ]);
        
    }
}
