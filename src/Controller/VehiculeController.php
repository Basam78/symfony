<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class VehiculeController{

    public function index(){

        return new Response('<h1>Liste des vehicules</h1>');

    }

    public function new(){

        dd('Nouveau vehicule');
    }

    public function show(Request $request): Response
    {
        $vehicule = $request->attributes->get('id');
    }

    public function modify(){

    }
    
    public function delete(){

    }
}