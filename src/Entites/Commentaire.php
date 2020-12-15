<?php


namespace App\Entites;


class Commentaire
{
    private $id;
    private $auteur;
    private $note;
    private $contenu;

    /**
     * Commentaire constructor.
     * @param $id
     * @param $auteur
     * @param $note
     * @param $contenu
     */
    public function __construct($id, $auteur, $note, $contenu)
    {
        $this->id = $id;
        $this->auteur = $auteur;
        $this->note = $note;
        $this->contenu = $contenu;
    }


}