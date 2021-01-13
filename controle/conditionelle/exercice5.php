<?php 
    /*
    Exercice 5:
     Initialiser une variable une annee  entier
      puis affiche si cette année est bisextile ou pas 
  */
  $annee=rand(1900,2021);
  //annee est divisible par 4
  //is_int(): Verifier si la valeur d'une variables est un entier ou non
  if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
   echo "$annee est bisextile";
  }else{
    echo "$annee non bisextile";
  }

?>