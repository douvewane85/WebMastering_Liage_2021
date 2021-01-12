<?php
   /*
      Exercice 4:
     Initialiser une variable mois entier
      puis afficher le mois correspondant en chaine
      Exemple: 
      mois=1 => Janvier
  */

     $mois=rand(1,12);
   /* 
     if($mois==1){
         echo "$mois ==> Janvier";
     }
     if($mois==2){
        echo "$mois ==> Fevrier";
    }
    if($mois==3){
        echo "$mois ==> Mars";
    }

    if($mois==12){
        echo "$mois ==> Decembre";
    }
    */

  switch($mois){
      case 1:
        echo "$mois ==> Janvier";
      break;
       case 2:
        echo "$mois ==> Fevrier";
       break;
       case 12:
        echo "$mois ==> Decembre";
       break;
       case 3:
        echo "$mois ==> Mars";
       break; 
       default:
       echo "$mois entre 4 et 11";
       break;

  }

?>