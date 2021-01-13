<?php 
   /*
    Exercice 6:
     Initialiser une variable un mois et une  annee qui sont 
     des  entiers puis affiche determine le nombre de jours 
     de ce mois dans cette annee
     Exemple :
     mois=2 annee:2020  nbreJours=29
     mois=2 annee:2021  nbreJours=28
     mois=12 annee:2021  nbreJours=31
     mois=4 annee:2021  nbreJours=30
  */

  $mois=rand(1,12);
  $annee=rand(1900,2030);
  $nbreJour=null;
 /* if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
      if($mois==2){
         $nbreJour=29;
      }elseif($mois==4 or $mois==6 or $mois==9){
        $nbreJour=30;
      }else{
        $nbreJour=31;
      }
  }else{
    if($mois==2){
        $nbreJour=28;
     }elseif($mois==4 or $mois==6 or $mois==9){
       $nbreJour=30;
     }else{
       $nbreJour=31;
     }
  }*/

  /*
  $mois=1||3||5;=> $mois==1 || $mois==3 || $mois==5

  if($mois==2){
    if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
        $nbreJour=29;
    }else{
        $nbreJour=28;
    }
 }elseif($mois==4 or $mois==6 or $mois==9 or $mois==11){
   $nbreJour=30;
 }else{
   $nbreJour=31;
 }
*/
switch ($mois) {
    case 2:
        if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
            $nbreJour=29;
        }else{
            $nbreJour=28;
        }
    break;
    case 4:
    case 6:
    case 9:
    case 11:
         $nbreJour=30;
         break;
    default:
    $nbreJour=31;
        break;
}



 echo "Le nbre de Jours du mois $mois dans l'anne $annee est $nbreJour";

?>