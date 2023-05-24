<?php

/*
 * Complete the 'palindromeIndex' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function palindromeIndex($s) {
    $long = strlen($s); //Longueur du mot
    
    //Initialistation des compteurs
    $i = 0;
    $j = $long - 1;
   //Boucle pour parcourir le tableau dans les 2 sens et verifier si les lettres de chaque extremite sont les mêmes
    while ($i < $j && $s[$i] == $s[$j]) {
        $i++;
        $j--;
    }
    if ($i >= $j) {
        return -1;
    }
    if ($s[$i + 1] == $s[$j] && $s[$i + 2] == $s[$j - 1]) {
        return $i;
    }
    if ($s[$i] == $s[$j - 1] && $s[$i + 1] == $s[$j - 2]) {
        return $j;
    }
    return -1;
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = palindromeIndex($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
