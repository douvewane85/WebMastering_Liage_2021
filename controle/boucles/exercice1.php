<?php 
    //Afficher les Valeurs entre 1 et 10
    //1,2,3,.....,10
    //$val=1;
    //Condition :$val<=10
    //Pas => $val=$val+1 => $val+=1 => $val++
     echo"Boucle While<br/>";
      $val=1;
      while($val<=10){
          echo $val." ,";
          $val++;
      }
      echo"<br/>Boucle For<br/>";
      for($val=1;$val<=10;$val++){
        echo $val." ,";
     }

     echo"<br/>Boucle do..While()<br/>";
     $val=1;
     do{
        echo $val." ,";
        $val++;
     }
     while($val<=10);

?>