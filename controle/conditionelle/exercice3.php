<?php   
  /*
    Exercice 3:
     Initialiser trois variables  puis les ranger
      dans l'ordre decroissant
  */

  $nb1=rand(-20,20);
  $nb2=rand(-20,20);
  $nb3=rand(-20,20);

  $min=null;
  $moy=null;
  $max=null;
/*
  if($nb3>$nb2 and $nb2>$nb1){
    $min=$nb1;
    $moy=$nb2;
    $max=$nb3;
  }
  if($nb2>$nb3 and $nb3>$nb1){
    $min=$nb1;
    $moy=$nb3;
    $max=$nb2;
  }
  if($nb1>$nb2 and $nb2>$nb3){
    $min=$nb3;
    $moy=$nb2;
    $max=$nb1;
  }
  if($nb1>=$nb3 and $nb3>$nb2){
    $min=$nb2;
    $moy=$nb3;
    $max=$nb1;
  }

   $nb1-----$nb2-----$nb3--
  */

  if($nb1>$nb2){
      $min=$nb2;
      $max=$nb1;
  }else{
      //$nb1<=$nb2
    $min=$nb1;
    $max=$nb2;
  }
  //---$nb3----$min ------   $max-----  
  //   $min    $moy          $max
  //-------$min ---$nb3---   $max----
  // -------$min ---$moy---   $max----
  //-------$min --   $max----$nb3
  // -------$min ---$moy---   $max----
  if($nb3<$min){
      $moy=$min;
      $min=$nb3;
  }else{
      //$nb3>=$min 
      if($nb3<$max){
        //$nb3>=$min && $nb3<$max
        $moy=$nb3;
      }else{
        //$nb3>=$max
        $moy=$max;
        $max=$nb3;
      }

  }


//2+2+3 
//4+3
//7

  echo "$max,$moy,$min";
?>