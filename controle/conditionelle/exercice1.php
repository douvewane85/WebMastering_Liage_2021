<?php 
  /*
    Exercice 1:
     Initialiser une variable est d'indiquer
     son signe(positif,negatif ou null)
  */

    $nbre=rand(-20,20);
    if($nbre==0){
        echo "$nbre est null";
    }else{
        //$nbre!=0 $nbre<0 ou $nbre>0
        if($nbre>0){
            echo "$nbre est Posirtif";
        }else{
            //$nbre<0
            echo "$nbre est Négatif";
        }
    }


?>