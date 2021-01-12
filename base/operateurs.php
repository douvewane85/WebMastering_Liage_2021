<?php 
   //Type Operateurs
    /*
        1-Operateurs Arithmetiques => Type Resultat numeric(entier ou un reel)
           -Addition (+)
           -Soustraction(-)
           -Multiplication (*)
           -Division(/)
           -modulo(%):reste de la division entiere(numerateur et dénominateur sont entiers)
        
        2- Operateurs Comparaisons => Type Resultat boolean(true ou false)
           - >,>=,<,<=,==,!=
           - === 
           Exemple
            2==2   => true
            2=='2' => true (== egalité de valeurs)
            2===2  => true
            2==='2'=> false (=== egalité de valeurs et de type)

        3-Operateurs Logiques :combinaison de plusieurs expressions de comparaison
         => Type Resultat boolean (true ou false)
           -&& ou and 
           -|| ou or
           -!(Negation)
           Exemples:
           2>5 && 4<2   => false
           2>5 || 4<2   => false
           2>5 || 4>2   => true
           !(2>5) => 2<=5 => true
           Operateurs Negation
           >     =>    <=
           <     =>    >=
           >=    =>    <
           <=    =>    >
           ==    =>   !=
           &&    =>   ||
           ||    =>   &&
           !(true)  => false
            !(2>5 && 4<2) => 2<=5 || 4>=2 => true
            !(false) => true

        -4 Operateurs Affection et Affectation composée
           = : affection ou initialisation 
           +=,-=,*=,/=,%= :  Affectation composée
           Exemples:
           $x=2
           $x=$x +2 //Accumulation => x est egale 4
           ou
           $x+=2
           a) Incrementation => Affectation composée d'addition dont la valeur est 1
             Exemple 
                $x+=1;  ou $x++(post-increment); ou ++$x(pré-increment);
                -post-increment
                  $x=1;     
                  $y=$x++; 
                  ou 
                  $x=1;
                  $y=$x; //Affection
                  $x++; //Incrementation
                
                 valeur y =1  x=2

                  -pre-increment
                  $x=1;     
                  $y=++$x; 
                  ou 
                  $x=1;
                  $x++; //Incrementation
                  $y=$x; //Affection
                         
                 valeur y =2  x=2

                 a) Décrementation => Operateur Affectation 
                                      composée de Soustraction
                                      dont la valeur est 1
             Exemple 
                $x-=1;  ou $x--(post-decrement); ou --$x(pré-decrement);
                -post-decrement
                  $x=1;     
                  $y=$x--; 
                  ou 
                  $x=1;
                  $y=$x; //Affection
                  $x--; //Décrementation
                
                 valeur y =1  x=0

                  -pre-decrement
                  $x=1;     
                  $y=--$x; 
                  ou 
                  $x=1;
                  $x--; //Decrementation
                  $y=$x; //Affection
                         
                 valeur y =0  x=0

    Expresions:  combinaison de (constantes ou  de variables) et d'operateurs
      Exemples:
        - $perimetre=$cote*4
        - $surface = $cote *$cote

    */ 


?>