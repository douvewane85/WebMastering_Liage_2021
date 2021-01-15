<?php
  require_once('array_fonction.php');
   /*
    $x est une variable simple
    $x ne peut contenir qu'une seule valeur à la fois
     $x=10;
     $x=20;
    echo $x;//20

    Tableau: variable pouvant contenir une collection de valeurs
     En PHP  les tableaux sont appelés Array
      ** Définition
           ** Syntaxe 1 :
                 $tableau=array(1,3,4,5);
                 print_r( $tableau);
                var_dump( $tableau);
           ** Syntaxe 2:
              $tableau=[1,3,4,5];
                print_r( $tableau);
              var_dump( $tableau);
    NB: les valeurs  d'un tableau peuvent etre de type differents
            *entiers,reels,boolean,null,string
            *tableau
            Exemple:                 
                $tableau=[1,true,4.5,null,"Bonjour",
                            [2,7,"Au revoir"]
                ];
     ** Type Tableau
           **Numerique :un tableau dont les indices sont entiers
              et par default en php un tableau est numerique

            **Associatif :un tableau dont les indices sont des chaines
              et est généralement utilisé pour representé une entité
                 $tableau=[
                     "cle1"=>Valeur,
                     "cle2"=>Valeur2,
                     ---
                     "clen"=>Valeurn,
                 ]
             Exemple:
                etudiant(matricule,nom,prenom,notes) 
                //Un etudiant est representé par un tableau associatif
                $etudiant1=[
                   "matricule"=>"Mat0001",
                   "nom"=>"Diop",
                   "prenom"=>"Amadou ",
                   "notes"=>[
                      "anglais"=> 12,
                      "francais"=> 18,
                       "php"=>13
                   ]
                ];

      **Manipulation des Tableaux
         **Ajout
             **Numerique
             **Associatif
             **fonctions Prédefinies
         **Affichage
         **Recherche
         **Suprresion
         **Modification
        
         //Fonctions Utiles

   */

  //Ajout
    //**Numerique

    $tableau=[1,'bonjour',true,null,1.5];
    //var_dump( $tableau);
    echo"Affichage du Tableau Avant ajout<br/>";
    showArray($tableau);
    //Ajouter Au revoir a la fin du tableau
     // $tableau[]="Au revoir";
     $tableau=addArrayNum($tableau,"Au Revoir");
     //var_dump( $tableau);
     echo"Affichage du Tableau apres ajout<br/>";
       showArray($tableau);
    //Ajout d'une valeur de type tableau
    // $tableau[]=[2.5,15,27.9,false];
      

    
    $tableau=saveArrayNum($tableau,[2.5,15,27.9,false]);
    //var_dump( $tableau);
    showArray($tableau);


    //Modifier une valeur d'un tableau
      //1 à 2 
      //$tableau[0]=2;
      $tableau=setArrayNum($tableau,2,0);
    
    //  $tableau[1]="Hello";
    $tableau=saveArrayNum($tableau,"Hello",1);
//Premier element du tableau à position 6
      $tableau[6][0]=3.5;
      $tableau[6][3]=true;
      var_dump( $tableau);


    //Associatif
    //Un etudiant est representé par un tableau associatif
    $etudiant1=[
        "matricule"=>"Mat0001",
        "nom"=>"Diop",
        "prenom"=>"Amadou "
    ];
    echo"Affichage du Tableau Avant ajout<br/>";
    showArray($etudiant1);
    //$etudiant1[]=12; Pas Bon
   // $etudiant1['age']=12;
   $etudiant1=saveArrayAssoc($etudiant1,"age",12);
    //var_dump($etudiant1);
    echo"Affichage du Tableau Apres ajout<br/>";
    showArray($etudiant1);
    /*$etudiant1['notes']=[
        "anglais"=> 12,
        "francais"=> 18,
         "php"=>13
    ];*/
    $etudiant1=saveArrayAssoc($etudiant1,"notes",[
        "anglais"=> 12,
        "francais"=> 18,
         "php"=>13
    ]);
    var_dump($etudiant1);
//Modification
    //$etudiant1["nom"]="Faye";
    $etudiant1=saveArrayAssoc($etudiant1,"nom","Faye");
    $etudiant1['notes']['anglais']=14;
    var_dump($etudiant1);

    
?>