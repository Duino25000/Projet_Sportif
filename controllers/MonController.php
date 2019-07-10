<?php

$nomLogin = (isset($_GET["variable6"])) ? $_GET["variable6"] : NULL;
$mdpLogin = (isset($_GET["variable7"])) ? $_GET["variable7"] : NULL;
require '../models/ConnectionBddModel.php';

if (gettype($result)=='array'){
  $type_compte = $result['Type_Compte'];
  $compareNom = $result['Nom'];
  
  
  if ($type_compte == "administrateur"){
    require '../views/admin.html.twig';
    //echo "compte administrateur";
  }elseif ($type_compte == "utilisateur"){
    require '../views/utilisateur.html.twig';
    //echo "Le compte n'existe pas";
  }

//  AJOUTER ICI UNE CONDITION SI LA BASE NE CONTIENT PAS LE NOM ENTREE

}//if gettype























//print_r($result);
//var_dump(gettype ($result) );
// foreach ($envoiTypeCompte as $row) {
//   $compareNom = $row['Nom'];
//   $compareMdp = $row['Mdp'];
//   //$compareCompte = $row['Type_Compte'];
//   //echo $row[3];

//   if (($compareNom == $nomLogin) && ($compareMdp == $mdpLogin)){
//     //require '../views/admin.html.twig';
//     echo "mot de passe correct";
    
//   }else{
//     //require '../views/utilisateur.html.twig';
//     echo "mot de passe incorrect";
//   }
// }

//var_dump(gettype ($result) );





