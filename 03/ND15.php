<?php
/*
5 .Sukurkite keturis kintamuosius 
ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių,
 vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/
//   1 variantas

$skaicius1 = rand(0,2);
$skaicius2 = rand(0,2);
$skaicius3 = rand(0,2);
$skaicius4 = rand(0,2);


$bendrai = $skaicius1.$skaicius2.$skaicius3.$skaicius4;

$nulial = substr_count($bendrai,'0');
$vienetai = substr_count($bendrai,'1');
$dvejetai = substr_count($bendrai,'2');


echo$bendrai;
echo'<br>';
echo$nulial;
echo'<br>';
echo$vienetai;
echo'<br>';
echo$dvejetai;

//   2 variantas

$suma = $skaicius1 + $skaicius2 + $skaicius3 + $skaicius4;
$_2 = 0;
if ($skaicius1 == 2) {
    $_2++;
}
if ($skaicius2 == 2) {
    $_2++;
}
if ($skaicius3 == 2) {
    $_2++;
}
if ($skaicius4 == 2) {
    $_2++;
}
$_1 = $suma - ($_2 * 2);
$_0 = 4 - $_1 - $_2 ;
echo'<br>';
echo $_0.$_1.$_2;
