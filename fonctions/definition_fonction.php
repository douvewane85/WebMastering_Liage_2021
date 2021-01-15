<?php
    //Définitions de nos Fonctions: creer nos propres fonctions
       /*
           Syntaxe:
             function nomFonction([$arg1,$arg2,....,$argn]){
                 //Instructions
                 [return $result]//facultatif
             }
            [$arg1,$arg2,....,$argn]:informations nécessaires à la fonction pour s'executer
            [$arg1,$arg2,....,$argn]:arguments formels

             Type:
              -Fonction vide : une fonction qui ne retourne pas de resultat
              -Fonction non vide : une fonction qui  retourne  un resultat 
                 * return $resultat
                 NB:
                   1) Evaluer une expression
                   2) Arrete  la fonction
                   3) retourne le resultat
             Exemple:
             //Math
                1) Definition
                    f(x,y)=> x+ y; ou somme(a,b)=> a+ b;//static
                2) Appel : x, y sont remplacés par des valeurs
                   f(2,5)=> 7
                   somme(4,8)=>12
                   
            //PHP
              1) Definition
                //Fonction vide
                function f($x,$y){
                   $result=$x+$y;
                   echo "La somme est $result";
                }
                ou
                //Fonction Non vide
                function somme($a,$b){
                  $result=$a+$b;
                   return $a+$b;
                echo "La somme est $result";//Code mort
                }
            2) Appel : $x, $y(arguments formels) sont remplacés par des valeurs(arguments reels) 
               //Fonction Vide
                   f(12,5)
             //Fonction Non Vide
               $result=somme(rand(2,10),rand(34,2))

               **Conseils:
                  fonction avec Arguments
                  fonction qui retourne un resultat
       */


    

?>