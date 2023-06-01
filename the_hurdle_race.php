<?php

/*
 * Complete the 'hurdleRace' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY height
 */

function hurdleRace($k, $height) {
    // Write your code here
    
   $tmp = max ($height); //Trouver le plus grand nombre du tableau
   
   //Comparer le plus grand nombre du tableau avec la hauteur maximale de saut
   if( $k < $tmp ){ 
       $nmbr = $tmp - $k; 
       return $nmbr;
   }
   else return 0;

}
