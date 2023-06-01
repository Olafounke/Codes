<?php

/*
 * Complete the 'minimumDistances' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function minimumDistances($a) {
    // Write your code here
    
    $d = 100000; // Initialisation au maximum possible
    
    // Deux boucles for pour comparer une valeur du tableau aux valeurs suivantes
    for ( $i = 0; $i < count($a) ; $i++ ){ 
        for( $j = $i + 1; $j < count($a); $j++){
            
            // Comparaison des valeurs
            if( $a[ $i ] == $a[ $j ] && $i != $j ){
                
                //Determiner la distance minimum
                $d = min( $d , abs ( $j - $i ) );
                
            }
        }
       
    } 
    // Si la distance minimum est toujours le maximum posible, il n'y a pas de correspondance 
    if( $d == 100000 ) $d = -1;
    
     return $d;
}

