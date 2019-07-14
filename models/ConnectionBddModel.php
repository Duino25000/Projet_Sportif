<?php

//Connection à la base de données.Adresse de la base, nom du projet, non administrateur, mot de passe (vide dans ce cas).
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }