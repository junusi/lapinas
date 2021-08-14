<?php
/*
https://regex101.com/
*/
/* 11. Uzdotis
Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm 
nuo 1000 iki 9999.
 Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios,
  atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.
*/

$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);
 
echo "$var1, $var2, $var3, $var4, $var5, $var6 <br>";
 
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var4 < $var5) {
    $temp = $var4;
    $var4 = $var5;
    $var5 = $temp;
}
if ($var5 < $var6) {
    $temp = $var5;
    $var5 = $var6;
    $var6 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var4 < $var5) {
    $temp = $var4;
    $var4 = $var5;
    $var5 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
 
echo "$var1, $var2, $var3, $var4, $var5, $var6 <br>";