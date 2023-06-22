<?php 
class Solution {

/**
 * @param String[] $strs
 * @return String
 */ 

function longestCommonPrefix($strs) {
//Initialiser $result au cas ou il n'y a pas de correspondance
$result = ''; 
sort($strs); //Trier le tableau par ordre alphabetique
$mot1 = $strs[0]; //Prendre le premier mot du tableau
$mot2 = $strs[count($strs) - 1]; //Prendre le dernier mot du tableau
    for($i = 0; $i < strlen($mot1); $i++){ //Boucle pour parcourir le dernier mot du tableau
    if($mot2[$i] != $mot1[$i]){ //Comparer chaque lettre des mots a leur correspondant
        return $result; //S'ils sont different afficher resultat dans l'etat actuel
    }
    $result .=$mot2[$i]; //S'ils sont les memes on rajoute la lettre a resultat
    }   
    return $result;
}
}