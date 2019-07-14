<?php



require '../models/ConnectionBddModel.php';
//$pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');

$placeVide = $pdo->prepare("SELECT Place_Libre FROM admin2 WHERE Type_Compte LIKE 'UT%'");

$placeVide->execute();
//$req->execute();

//Et renvoi la reponse de la requette au controlleur pour traitement.
$dispo = $placeVide->fetchAll();

if (gettype($dispo)=='array'){
  $place_dispo = $dispo['Place_Libre'];
  
  
  echo json_encode($dispo);
  // if ($type_compte == "administrateur"){
  //   require '../views/admin.html.twig';
    
  // }elseif ($type_compte == "utilisateur"){
  //   require '../views/utilisateur.html.twig';
    
  // }

}//if gettype
