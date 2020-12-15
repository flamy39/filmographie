<?php

namespace App\Entites;

class Filmographie
{
    private $id;
    private $libelle;

    /**
     * Filmographie constructor.
     * @param $id
     * @param $libelle
     */
    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function ajouterFilm(Film $film) {

    }

}