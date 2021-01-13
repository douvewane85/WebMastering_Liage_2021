<?php
  
   /*
    A Faire Boucle
     Exercice3:
     1-Afficher les valeurs paires entre 1 et une valeur Générée
     2-Afficher les valeurs impaires entre valeur Générée  et 1
    
  */
  $nbre=rand(0,100);
  echo"Question1<br>";
  $val=0;
  while($val%2==0 and $val<=$nbre){
         echo "$val,";
         $val+=2;
  }

  echo"<br>Question2<br>";
  
  $nbre=rand(0,100);
  //$nbre=4  //4,3,2,1
             //3,1
  for($val=$nbre;$val>=1;$val--){
     if($val%2!=0){
        echo "$val,";  
     }
  }

?>