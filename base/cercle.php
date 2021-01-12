<?php 

   //rand(valDepart,ValFinale) : Generer des valeurs
   $rayon=rand(10,250);
   //define("PI",3.14);
  // $aire=PI*($rayon**2)
   $aire=M_PI*(pow($rayon,2));

  $circonference=2*M_PI*$rayon;

  echo "Rayon est $rayon <br/>";
  echo "Aire est $aire <br/>";
  echo "Circonference est $circonference <br/>";

?>