<?php 
/*
   include('fichier.php');:inclut et évalue le fichier 
   spécifié durant l'exécution du script
   ou
   L'instruction include_once inclut et évalue le fichier 
   spécifié durant l'exécution du script
   mais la différence est que si le code a déjà été inclus, 
   il ne le sera pas une seconde fois, et include_once retourne true
    require("fichier.php")
   L'instruction require_once est identique à require 
   mis à part que PHP vérifie si le fichier a déjà été inclus,
    et si c'est le cas, ne l'inclut pas une deuxième fois.
   
*/
    require_once("fonctions.def.php");
    //Appel Fonction Vide
      f(12,5);
    //Appel Fonction Vide
    $result=somme(rand(2,10),rand(34,2));
    echo "<br/>Somme : $result <br/>";

    //
    echo "<br/>Appel de la fonction carre() <br/>";
      $cote=rand(4,50);
      carre($cote);
      echo "<br/>Appel de fonction cercle() <br/>";
      $rayon=rand(7,12);
      cercle($rayon);
      echo "<br/>Appel de la fonction signe() <br/>";
      $nbre=rand(-10,10);
      signe($nbre);

      echo "<br/>Appel de la fonction bisextile() <br/>";

      $annee=rand(1900,2021);
      $result= bisextile($annee);//true or false
      if($result==true){
          echo "$annee est bisextile";
      }else{
        echo "$annee n'est pas bisextile";
      }

      echo "<br/>Appel de la fonction nbreJourUnMois() <br/>";
       $mois=rand(1,12);
      nbreJourUnMois($annee,$mois);

      echo "<br/>Appel de la fonction sommeNbrePremier() <br/>";
      $nbre=rand(1,50);
      echo "$nbre : ";
      $som= sommeNbrePremier($nbre);
      echo "<br/> La somme est $som";

?>