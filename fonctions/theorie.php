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
            //empty($var):retourne true lorsque $var est nul, vide ou non déclaré
            $val=15;
              if (empty($val)) {
                echo 'La variable est vide';
                }else{
                    echo 'Cette variable n\'est  pas vide, donc je peux l\'afficher.';
                }
        //Fonctions sur les Chaines
               //strlen($chaine):Retourne la taille de la chaîne string.
               // strchr($chaine,$chaineRechecher):Chercher une sous chaine dans une chaine Principale
               // strcmp ( string $str1 , string $str2 ) : int   ,Comparaison binaire de chaînes
                     //0 : les deux chaines sont identiques 
                     //!=0 :les deux chaines ne sont pas identiques 
                     //NB:Sensible à la casse
                     //strcasecmp() :insensible à la case
               //strpos($chaine,$chaineRecheche):Cherche la position du premier caractere de la première occurrence dans une chaîne
               // strrev($chaine):inverser la chaine
               //strtolower($chaine):convertit la chaine en minuscule
               //strtoupper($chaine):convertit la chaine en Majuscule
              //ucfirst($chaine):convertit le premier caractere en Majuscule 
               //trim($chaine): effacer les espaces en debut et en fin de chaine
                  //rtrim():effacer les espaces en fin de chaine
                  //ltrim():Supprime les espaces (ou d'autres caractères) de début de chaîne
            
               //str_replace($search,$replace,$chaine):Remplace toutes les occurrences dans une chaîne;
               //explode($sepateur,$chaine):transforme la chaine sous forme de tableau en se basant sur 
               //le séparateur
               //sprintf():construit une chaine en se basant des codes de Format
                   //un codes de Format est caractere indiquant le type de variable attendu
                   //Exemple:
                       //%s:string
                       //%d:int
                       //%f:float
               //Exemple:
                  $stringA = "user@example.com";
                  $toFind = "#";
                  echo "<br/> Fonction strlen() ".strlen($stringA);//7
                  echo "<br/> Fonction strchr() avec Element Existe ".strchr($stringA,"@");//@example.com
                  echo "<br/> Fonction strchr() avec Element Non Existe ".strchr($stringA,"#");//''
                  echo "<br/> Fonction strrev()  " .strrev($stringA);
                  echo "<br/>";
                  $var1 = "Bonjour";
                  $var2 = "bonjour";
                  if (strcmp($var1, $var2) !== 0) {
                      echo "Non identique";
                  }else{
                    echo "Identique";
                  }
                  echo "<br/>";
                  if (strcasecmp($var1, $var2) !== 0) {
                    echo "Non identique";
                  }else{
                    echo "Identique";
                 }

                 $mystring = 'amadouma';
                 $findme   = 'ma';
                 echo "<br/> Fonction strpos() avec Element Existe ".strpos($mystring, $findme);//1
                 $findme   = 'mo';
                 echo "<br/> Fonction strpos() avec Element Pas Existe ".strpos($mystring, $findme);//false

                 echo "<br/> Fonction strtolower()  ".strtolower("BONjoUr");//bonjour
                 echo "<br/> Fonction strtoupper()  ".strtoupper("BONjoUr");
                 echo "<br/> Fonction ucfirst()  ".ucfirst("bonjour");
                   
                 echo "<br/> Chaine avant trim bonjour";
                 echo "<br/> Fonction trim()  ".trim("bonjour");
                 echo "<br/> Fonction rtrim()  ".rtrim("bonjour");
                 $mystring = 'amadouma';
                 $search   = 'ma';
                 $replace   = 'mo';
                 echo "<br/> Fonction str_replace()  ".str_replace($search,$replace,$mystring );//amodoumo

                 $string="Ma,mo,ou,eu,a,u";
                 $tableau=explode(",",$string);
                 print_r($tableau);//Affiche un tableau
                 var_dump($tableau);//affiche tout type de variable


                 $nom="Mamadou";
                 $age=12;
                 $taille=1.90;

                 echo " <br/> Mon nom est $nom j'ai $age ans et ma taille est de $taille  ";
                 $string_result=sprintf("Mon nom est %s j'ai %d ans et ma taille est de %f",$nom,$age,$taille);
                 echo " <br/>  $string_result";

       
        //Tableaux
        //fonction emailValide

?>