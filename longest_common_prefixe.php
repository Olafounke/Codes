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
$str1 = $strs[0]; //Prendre le premier mot du tableau
$str2 = $strs[count($strs) - 1]; //Prendre le dernier mot du tableau
    for($i = 0; $i < strlen($str1); $i++){ //Boucle pour parcourir le dernier mot du tableau
    if($str2[$i] != $str1[$i]){ //Comparer chaque lettre des mots a leur correspondant
        return $result; //S'ils sont different afficher resultat dans l'etat actuel
    }
    $result .=$str2[$i]; //S'ils sont les memes on rajoute la lettre a resultat
    }   
    return $result;
}
}