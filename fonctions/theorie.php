<?php 
   //Fonction est traitement élementaire nommé
     //Fonction Developpeur =>Traitements Effectués
     //Avantages : Reutilisation d'un traitement

     //A-Fonctions Prédefinies : Fonctions définie par défaut 
     //dans l'interpréteur PHP
       //Exemples
           //Fonctions Math
              //rand()
              //pi()
              //max()
              //min()
              //sqrt()
              //pow()
            //Existance ou non Existence d'une variable
              //isset($var):Détermine si une variable est considérée définie, 
              //ceci signifie qu'elle est déclarée et est différente de null.
                  //existe =>true
                  //Pas Existe => false
              //Exemple
              //unset($var):unset() détruit la ou les variables 
              //dont le nom a été passé en argument var.
     // Ceci est vrai, alors le texte est affiché
          $var="Bonjour";
          unset($var);
            if (isset($var)) {
              echo 'Cette variable existe, donc je peux l\'afficher.';
              }else{
                  echo 'Cette variable n\'existe pas';
              }

              //empty($var):Détermine si une variable est vide
             // $val='';//'':chaine vide
            // $val=null;//null absence de valeurs
            $val=15;
              if (empty($val)) {
                echo 'La variable est vide';
                }else{
                    echo 'Cette variable n\'est  pas vide, donc je peux l\'afficher.';
                }
        //Fonctions sur les Chaines

        //Définitions de nos Fonctions

        //Tableaux

?>