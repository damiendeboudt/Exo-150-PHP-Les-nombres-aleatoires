<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$random = rand(0, 50);
echo "le nombre est $random <br>";



echo "<br><br>";
/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */
$random2 = rand(50, getrandmax());
echo "<p>le 2eme nombre aleatoire est $random2 <br>";
// TODO Votre code ici.


/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */
echo "<br><br>";
// TODO Votre code ici.
$random3 = rand(0, 50);
    if ($random3 <= 25) {
        echo "<p>Vous avez gagné";
    } else {
        echo "<p>Vous avez perdu";
    }

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.


  $randomNumberTest3 = rand($min, $max);





