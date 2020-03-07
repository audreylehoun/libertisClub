<?php
$liste  = "rock, techno, hardtek";
$pieces = explode(", ", $liste);
echo $pieces[0]; // rock
echo $pieces[1]; // techno
echo $pieces[3]; // hardtek
?>

<?php
// Exemple 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Exemple 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>

<?php
/* Une chaîne qui ne contient pas de délimiteur va retourner un tableau
   contenant qu'un seul élément représentant la chaîne originale */
$input1 = "hello";
$input2 = "hello,there";
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );

?>

