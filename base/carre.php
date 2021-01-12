<?php 
     /* 
          Initialiser le Coté d'un carre puis calculer:
          -Perimetre
          -surface
          -aire
          -longueur diagonale
     */

     $cote=10;
     $perimetre=$cote *4;
     $demiPerimetre=$perimetre/2;
     $surface=$cote*$cote;
     //sqrt(2)
     //sqrt(x) => racine x
     //x puissance y => pow(x,y)
     //**  : puissance
     $diagonale=sqrt(($cote**2) + ($cote**2) );

     echo "Cote est : $cote <br/>";
     echo 'Perimetre est : '. $perimetre.' <br/>';
     echo "Demi Perimetre est : $demiPerimetre <br/>";
     echo "Surface est  : $surface <br/>";
     echo "Diagonale est  : $diagonale <br/>";
?>