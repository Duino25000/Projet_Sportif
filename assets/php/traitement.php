<?php

header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 

$nom = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$mdp = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$mail = (isset($_GET["variable3"])) ? $_GET["variable3"] : NULL;
$tel = (isset($_GET["variable4"])) ? $_GET["variable4"] : NULL;
$ville = (isset($_GET["variable5"])) ? $_GET["variable5"] : NULL;
$nomLogin = (isset($_GET["variable6"])) ? $_GET["variable6"] : NULL;
$mdpLogin = (isset($_GET["variable7"])) ? $_GET["variable7"] : NULL;

echo $nom;
echo $mdp;
echo $mail;
echo $tel;
echo $ville;
echo $nomLogin;
echo $mdpLogin;

//function connexion()
//{
    // if (extension_loaded ('PDO')) {
    //   echo 'PDO OK'; 
    // } else {
    //     echo 'PDO KO'; 
    // }

  $pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');

  $req = $pdo->prepare("INSERT INTO admin2 VALUES ('".$nom."', '".$mdp."', '".$mail."', '".$tel."','".$ville."')");

  //$req = $pdo->prepare("SELECT * FROM admin2 WHERE Type_Compte LIKE 'AD%'");

  $req->execute();
  $data = $req->fetchAll();


//}

//connexion();
