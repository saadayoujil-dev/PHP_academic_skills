<?php
// Appel aux fonctionalités dans la page fonctions.php
require_once __DIR__ .'/fonctions.php' ;

    $x = 4 ;
    $y = 1 ;

// Appel

    echo $x.' + '.$y.' = '.additionner($x, $y).PHP_EOL."<br/>" ;

    echo $x.' - '.$y.' = '.soustraire($x, $y)."<br/>" ;
    
    echo $x.' x '.$y.' = '.multiplier($x, $y)."<br/>" ;

    try {
        echo $x.' / '.$y.' = '.diviser($x, $y)."<br/>" ;
    }catch(InvalidArgumentException $e){
        echo 'Error : '.$e->getMessage() ;
    }

    echo 'Le maximum entre '.$x.' et '.$y.' et '.' 2 est : '.maximum($x, $y, 2)."<br/>" ;

    echo 'Le maximum entre '.$x.' et '.$y.' et '.' 10  est : '.maximum2($x, $y, 10)."<br/>" ;

    echo $x.' est positif : '.estPositif($x)."<br/>" ;

    echo $x.' est pair : '.estPair($x)."<br/>" ;

    echo $x.' est premier : '.estPremier($x)."<br/>" ;
    
    echo 'La facture : '.calculerRemise($x, $y)." MAD"."<br/>" ;

    echo 'La moyenne des notes'.$x.' '.$y.', 20 est : '.moyenne($x, $y, 20)."<br/>" ;
    
    echo 'La moyenne des 0 notes est : '.moyenne()."<br/>" ;
    
    echo "L'air du cercle est : ".aireCercle($x)."m²<br/>" ;
    
    echo "Le perimètre du cercle est : ".perimetreCercle($x)."cm<br/>" ;
    
    echo 'celsius Vers Fahrenheit : '.celsiusVersFahrenheit($x)."F°<br/>" ;
    
    echo ' MAD → EUR est : '.moyenne(120, 0.092)."EUR<br/>" ;

    try{
    echo $x.'! égale à : '.factorielle($x)."<br/>" ;
    }catch(Exception $e){
        echo "Error : ".$e->getMessage() ;
    }

    echo print_r(fibonacci($x))."<br/>" ;

    echo 'PGCD de '.$x.' et '.$y.' est : '.pgcd($x, $y)."<br/>" ;

    echo 'Puissance de '.$x.' exposant '.$y.' est : '.puissance($x, $y)."<br/>" ;

    // echo 'Puissance de '.2.' exposant '.2.' est : '.puissanceRecurcive(2, 2)."<br/>" ;

/* The current accepted answer does not fully explain the cause of using __DIR__ 
and in my opinion the answer is wrong. I am gonna explain why do we really need this.
Suppose we have a file structure like this

- index.php
- file3.php -(content: hello fake world)
- dir/
   - file2.php
   - file3.php - (content: hello world)

If we include file3.php from file2.php and run file2.php directly,
we will see the output hello world. 
Now when we include file2.php in index.php, when the 
code will start executing and it will see file2.php 
again including file3.php using include 'file3.php',
at first the execution will look for file3.php in the 
current execution directory (which is the same 
directory where index.php is present)..Since file3.php
 is present in that directory, it will include that 
 file3.php instead of dir/file3.php and we will see 
 the output hello fake world instead of hello world.

If file3.php would not exist in the same directory, 
it would then include the correct dir/file3.php file 
which makes the accepted answer not valid because it 
states file3.php cannot be included which is not true. 
It is included.

However, here comes the necessity of using __DIR__. 
If we would use include __DIR__ . '/file3.php' in 
file2.php, then it would include the 
correct file even though another file3.php is present 
in the parent directory. */