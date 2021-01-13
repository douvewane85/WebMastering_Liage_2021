<?php 
 //Afficher les Valeurs entre 10 et 1
    //10,9,8,.....1
    //$val=10;
    //Condition :$val>=1
    //Pas => $val=$val-1 => $val-=1 => $val--
    echo"Boucle While<br/>";
    $val=10;
    while ($val>= 1) {
        echo $val." ,";
        $val--;
    }

    echo"<br/>Boucle For<br/>";

    for ($val=10; $val>=1 ; $val--) { 
        echo $val." ,";
    }

    echo"<br/>Boucle do..While()<br/>";

    $val=10;
    do {
        echo $val." ,";
        $val--;
    } while ($val>=1);

?>