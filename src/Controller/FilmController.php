<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Film;

class FilmController extends AbstractController
{

    public function listFilms()
    {
        $films = [
            [ "id" => "1", "titre" => "Mia et le Lion Blanc", "dateAt" => "2019-06-29 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"],
            [ "id" => "2", "titre" => "Le Retour de Mary Poppins", "dateAt" => "30-12-2018 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"],
            [ "id" => "3", "titre" => "Aquaman","dateAt" => "07-01-2019 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"],
            [ "id" => "4", "titre" => "Edmond", "dateAt" => "29-02-2019 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"],
            [ "id" => "5", "titre" => "Creed II", "dateAt" => "26-04-2019 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"],
            [ "id" => "6", "titre" => "Une Affaire de famille", "dateAt" => "06-04-2019 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"],
            [ "id" => "7", "titre" => "Astérix - Le Secret de la Potion Magique", "dateAt" => "12-03-2019 18:25:15", "realisateur" => "Gilles de Maistre","acteurs" => "Langley Kirkwood"]
        ];

        return $this->render('film/film.html.twig', [
                'films' => $films
            ]
        );
    }

    public function afficheFilm($filmx){

        //var_dump($filmx);
        //var_dump(json_decode($filmx));

        return $this->render('film/film.html.twig', [
            'filmx' => json_decode($filmx)
        ]
    );
    }

}