<?php
class Solution {

/*
 * @param Integer[] $nums
 * @return Integer
 */
function findDuplicate($nums) {
    sort( $nums ); //Trie le tableau nums
    for( $i = 0; $i < count( $nums ); $i++ ){ //Parcours le tableau trié
        if( $nums[ $i ] == $nums[ $i + 1 ]){ //Compare un nombre avec le nombre suivant
                $duple = $nums[ $i ]; //Le nombre dupliqué
        }
    }
    return $duple; //Retourne le nombre dupliqué 
}
   
}