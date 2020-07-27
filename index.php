<?php

for ($nombre = 1; $nombre <= 100; $nombre++){
$texte = '';
    if ($nombre % 3 === 0) {
        $texte .= 'Fizz';
    }
    if($nombre % 5 === 0){
        $texte .= 'Buzz';
    }
    //$affichage = ($texte != "") ? $texte : $nombre;
    $affichage = $texte ?: $nombre;
    echo "<p>$affichage</p>";
}