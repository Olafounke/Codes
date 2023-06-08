<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $pile = array(); //Tableau  vide
        $po = array('(', '[', '{'); //Parentheses ouvrantes
        $pf = array(')', ']', '}'); //Parentheses fermantes
         //Boucle pour parcourir la chaîne de caractere
         for($i = 0; $i < strlen($s); $i++){
            $lettre = $s[$i];
            // Si la lettre fait partie des parentheses ouvrantes, l'ajouter dans la pile vide
            if(in_array($lettre, $po)){
                array_push($pile, $lettre);
            } 
            //sinon si elle fait partie des parentheses fermantes 
            elseif(in_array($lettre, $pf)){
                // Verifier si la pile est vide, alors elle n'a pas de parenthese ouverte 
                if(count($pile) == 0){ 
                return false;
                }
                $lettreD = array_pop($pile); //Retirer la derniere parenthese ouverte du tableau
                if(array_search($lettreD, $po) != array_search($lettre, $pf)){ //Si la dernière  parenthese ouverte du tableau ne correspond à la parenthese fermante  
                return false;
                }
            }
        }
        return count($pile) == 0; //Retourne true losrque la pile est vide

    }
}