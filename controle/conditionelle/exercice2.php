<?php 
   /*
    Exercice 2:
     Initialiser deux variables  puis les ranger
      dans l'ordre croissant
     avec if
   */

     $chiffre1=rand(-9,9);
     $chiffre2=rand(-9,9);
/*
      Solution1
     if($chiffre1<$chiffre2){
         echo "Ordre croissant donne $chiffre1,$chiffre2";
     }
 
     if($chiffre2<=$chiffre1){
        echo "Ordre croissant donne $chiffre2,$chiffre1";
     }
    /* if($chiffre2==$chiffre1){
        echo "Ordre croissant donne $chiffre2,$chiffre1";
     }
*/

/*
   Solution 2
    
*/

  $min=null;
  $max=null;
  if($chiffre1<$chiffre2){
    $min=$chiffre1;
    $max=$chiffre2;
  }

  if($chiffre2<=$chiffre1){
    $min=$chiffre2;
    $max=$chiffre1;
  }

  echo "Ordre croissant donne $min,$max";

?>