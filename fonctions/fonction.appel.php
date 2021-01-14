<?php 
    include_once("fonctions.def.php");
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


?>