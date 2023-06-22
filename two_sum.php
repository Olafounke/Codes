<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        /*Deux boucles pour parcourir le tableau, faire la somme par paire du nombre
        i avec chacun des nombres qui suivent (nombre j++) et ensuite itere i*/
        for( $i = 0; $i < count( $nums ); $i++ ){
            for( $j = $i + 1; $j < count( $nums ); $j++){
                $targ = $nums[ $i ] + $nums[ $j ];
                /*Si la somme est égale à target et i différent de j,
                on retourne le tableau de i et j */
                if( $targ == $target && $i != $j ){
                    return [ $i, $j ];
                }      
            }
        }
    }
}