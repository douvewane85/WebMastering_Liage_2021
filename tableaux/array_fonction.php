<?php
/*
   Fonctions d'un Tableau Numérique
*/
//Ajout
function addArrayNum(array $array,$val):array{
    $array[]=$val;
    return $array;
 }
 //Modifier un eleement du Tableau
 function setArrayNum(array $array,$val,int $pos):array{
     
    $array[$pos]=$val;
    return $array;
 }

 //Ajout ou Modification
 function saveArrayNum(array $array,$val,int $pos=null):array{

       if(isset($pos)){
          $array[$pos]=$val; 
       }else{
          $array[]=$val;
       }
    return $array;
 }



/*
   Fonctions d'un Tableau Associatif
*/

 //void => vide
 //Ajouter et Modifier
 function saveArrayAssoc(array $array,string $key,$val):array{
    $array[$key]=$val;
    return $array;
 }


 /*
     Fonctions Communes 
  */

   //Fonction Affichage du Tableau

 function showArray(array $array){
    foreach ($array as $key => $value) {
        //La valeur n'est pas un tableau
        if(!is_array($value)){
            echo "$key => $value <br>";
        }else{
            //La valeur est  un tableau
              foreach ($value as $k => $val) {
                echo "$k => $val <br>";
              }
        }
        
    }
}

function searchArray(array $array,$val){  
    foreach ($array as $key => $value) {
        if(!is_array($value) && $value ==$val){
            return $key; 
        }
    }
    return null;
}

function deleteArray(array $array,$val):array{
      $key=searchArray($array,$val);
      if($key!=null){
        unset($array[$key]);
      }
    return $array;
}

 //Argument facultatif d'une fonction est un argument 
 //initialisé à la définition de la fonction
   function somme($a,$b=3,$c=0){
       return $a+$b+$c;
   }

   $result=somme(2,5,4); //11
   $result=somme(2,5);//2+5+0=7
   $result=somme(2);//2+3+0 =5
?>