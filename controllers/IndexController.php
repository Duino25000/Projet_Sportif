<?php

//servira à afficher la page d'accueil du projet

//la ligne "namespace" permet d'établir un espace de nommage pour notre classe. Elle s'écrit en commençant par l'espace de nommage défini pour ce dossier dans notre autoloader (par respect des normes et simplicités, on utilise les noms des dossiers pour y faire une sorte de chemin relatif à la racine du projet).
namespace Controllers;



class IndexController
{
    public function index()
    {
        echo "Hello World!";
    }
}