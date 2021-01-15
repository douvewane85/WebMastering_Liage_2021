<?php
    function f($x,$y){
        $result=$x+$y;
        echo "La somme est $result";
     }

     //Fonction Non vide
     function somme($a,$b){
        return $a+$b;
     }

       /* 
          Initialiser le Coté d'un carre puis calculer:
          -Perimetre
          -surface
          -aire
          -longueur diagonale
      */

      function carre($cote){
            $perimetre=$cote *4;
            $demiPerimetre=$perimetre/2;
            $surface=$cote*$cote;
            $diagonale=sqrt(($cote**2) + ($cote**2) );

            echo "Cote est : $cote <br/>";
            echo 'Perimetre est : '. $perimetre.' <br/>';
            echo "Demi Perimetre est : $demiPerimetre <br/>";
            echo "Surface est  : $surface <br/>";
            echo "Diagonale est  : $diagonale <br/>";
      }

      function cercle($rayon){
        $aire=M_PI*(pow($rayon,2));
        $circonference=2*M_PI*$rayon;
        echo "Rayon est $rayon <br/>";
        echo "Aire est $aire <br/>";
        echo "Circonference est $circonference <br/>";
      }

   /*
    Exercice 1:
     Initialiser une variable est d'indiquer
     son signe(positif,negatif ou null)
   */
  function signe($nbre){
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
  }

   /*
    Exercice 5:
     Initialiser une variable  annee(entier)
      puis affiche si cette année est bisextile ou pas 
   */

       function bisextile($annee){
           $resultat=null;
          if($annee%4==0 && $annee%100!=0 || $annee%400==0 ){
              $resultat=true;
           }else{
            $resultat=false;
           }
           return $resultat; 
       }

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

  function nbreJourUnMois($annee,$mois){
      $nbreJour=null;
    switch ($mois) {
        case 2:
          $result= bisextile($annee);
            if($result==true){
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
  }

    /*
      1-afficher la somme des valeurs premiers entre 1 et une valeur Générée
         **tester si un nombre est premier ou pas => Exemple de Résultat true or false
           *** Nbre premier est nombre divisible seulement par 1 et lui meme
              Nbre      Diviseurs  Type
              2         1,2         Premier
              3         1,3         Premier
              4         1,2,4       Pas Premier
              5         1,5         Premier
              6         1,2,3,6     Pas Premier
            ***Un nombre n'est pas premier lorsqu'il a un 3 diviseurs
               //$nbre=6  // $i= 2,3,4,5 
               //$i=2 6%2==0  true
               //$i=3 6%3==0  true

               //$nbre=5    //$i=2,3,4
               //$i=2    5%2==0  false
               //$i=3    5%3==0  false
               //$i=4    5%4==0  false

                1000 2,3,4,5,6,7,8,9  => 2  (1parcours)
                1000 1,2,3,4,5,6,7,8,9,10 cpt=4 (10 parcours)

         **somme des nombres premiers et retourne la somme  
     */
        function premier($nbre){ 
            //Traitement cherche un 3ieme diviseurs et retourne false
            for ($i=2; $i <$nbre ; $i++) { 
                if($nbre%$i==0){
                    return false;
                }
            }
                return true;//Le nombre est premier
          
        }

       function sommeNbrePremier($valGenere){
           $somme=0;
         for ($i=2; $i <$valGenere ; $i++) { 
             
                $result=premier($i);
            
           //false or true
             /*
               if($result==true)  equivalent  if($result) 
               if($result==false) equivalent  if(!$result) 
             */
             if($result){
                 echo "$i, ";
                 $somme+=$i;

             }
         }
         return $somme;

       }

    /*
      2-afficher le produit des valeurs parfaits entre 1 et une valeur Générée
        
    */


?>