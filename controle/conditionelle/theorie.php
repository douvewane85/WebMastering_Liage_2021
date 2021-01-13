<?php
   /*
     Structures de controles permettent  d'executer en
     alternance des blocs d'instructions
      -Conditionnelles 
        *if(condition) --- else
          *condition : expression comparaison ou logique dont resultat est boolean
         syntaxe
          if(condition){
             instructionIF;
          }else{
             instructionElse;
          }
           
          ou 

          if(condition){
             instructionIF;
          }
          //else
          if(!condition){
             instructionElse;
          }
       condition est egale à true =>  instructionIF executée
       condition est egale à false =>  instructionElse executée
       NB:
          le else teste de maniere implicite la négation de condition du if
          Exemple : 
         
          if(2<4){
              echo "true";
          }else{
              //2>=4
              echo "false";
          }
          Resultat : true

            if(2>=4){
              echo "true";
          }else{
              //2<4
              echo "false";
          }
          ou 

        if(2>=4){
              echo "true";
          }
          if(!(2>=4)){
              //2<4
              echo "false";
          }
          
          Resultat : false


        *switch(variable )--- case
          suite de if qui teste sur une meme variable
          if($var==valeur1){
            instruction1;
          }
          if($var==valeur2){
            instruction2;
          }
          if($var==valeur3){
            instruction3;
          }

          ou 
          switch($var){
            case valeur1:
              instruction1;
              break;
               case valeur2:
              instruction2;
              break;
               case valeur3:
              instruction3;
              break;
             [default:
                instructionDefault;
                break;
             ] 
          }

         NB: Cas Défault(falcutatif) est le cas execution si aucun des autres 
          cas énumerés n'est pas verifé

     
    */
?>