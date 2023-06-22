<?php

/*
 * Complete the 'utopianTree' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

 function utopianTree($n) {
    // Write your code here
    
    //Initilisation de t
    $t = 1;
    
    //Boucle pour evoluer de cycle en cycle
    for( $i = 0; $i < $n; $i++ ) {
        
        //Si t est paire alors on est en ete
        if ( $t % 2 == 0 ){
            $t = $t + 1;
        }
        
        // Si t est impaire alors on est au printemps
        else {
            $t = $t * 2;
        }
    
    }
    
   return $t;
}