<?php

//  ## Exercice 1
$nombre = 0;
while ($nombre <= 10) {
    echo "{$nombre} <br>";
    $nombre++;
}

// ## Exercice 2
echo "<br>";
echo "Exercice 2";
echo "<br>";
$nombre1 = 0;
$nombre2 = 50;

while ($nombre1 <= 20) {
    $resultat = $nombre1 * $nombre2;
    echo "{$resultat}<br>";
    $nombre1++;
}

// ## Exercice 3
echo "<br>";
echo "Exercice 3";
echo "<br>";
$nombre1 = 100;
$nombreb2 = 5;

while ($nombre1 >= 10) {
    $resultat = $nombre1 * $nombre2;
    echo "{$resultat}<br>";
    $nombre1 -= 1;
}

// ## Exercice 4
echo "<br>";
echo "Exercice 4";
echo "<br>";

$nombre = 1;

while ($nombre < 10) {

    $nombre += $nombre / 2;
    echo "<br>";
    echo "{$nombre}";
}
echo "<br>";


// ## Exercice 5
echo "<br>";
echo "Exercice 5";
echo "<br>";
echo "<br>";

$nombre = 0;
while ($nombre <= 15) {
    echo"{$nombre} On y arrive presque <br>";
    $nombre +=1;
}

// ## Exercice 6
echo "<br>";
echo "Exercice 6";
echo "<br>";
echo "<br>";

$nombre = 20;
while ($nombre >= 0) {
    echo"{$nombre} C'est presque bon <br>";
    $nombre -=1;
}
// ## Exercice 7
echo "<br>";
echo "Exercice 7";
echo "<br>";
echo "<br>";

$nombre = 1;
while ($nombre <= 100) {
    echo"{$nombre} On tient le bon bout <br>";
    $nombre +=15;
}

// ## Exercice 8
echo "<br>";
echo "Exercice 8";
echo "<br>";
echo "<br>";

$nombre = 200;
while ($nombre >= 0) {
    echo"{$nombre} Enfin !!!! <br>";
    $nombre -=12;
}