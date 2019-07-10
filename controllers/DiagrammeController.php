<?php

require '../models/DiagrammeModel.php';

if (gettype($dispo)=='array'){
  $place_dispo = $dispo['Place_Libre'];
  
  
  echo $place_dispo;
  // if ($type_compte == "administrateur"){
  //   require '../views/admin.html.twig';
    
  // }elseif ($type_compte == "utilisateur"){
  //   require '../views/utilisateur.html.twig';
    
  // }



}//if gettype
