<?php
//     septintaUzd7.php

// 7.Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą,
// kurio visi, išskyrus paskutinį,
// elementai yra atsitiktiniai skaičiai nuo 0 iki 10,
// o paskutinis masyvas, kuris generuojamas pagal
//  tokią pat salygą kaip ir pirmasis masyvas.
//  Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.
// Paskutinio masyvo paskutinis elementas yra lygus 0;

echo'Uzduotys Nr 7.'.'<br>';
$septintas = [];
$numer = rand(10,20);
echo'$numer = '.$numer.'<br>';
foreach (range(0,$numer) as $key => $value) {
  $septintas[] = rand(0,10);
}

$mazas1 =[];
$numer1 = rand(10,20); 
echo'$numer1 = '.$numer1.'<br>';
foreach (range(0,$numer1) as $key => $value) {
    $mazas1[] = rand(0,10);
}

$mazas1[$numer1] = 0;
$septintas[$numer] = $paskutinis = $mazas1 ;

echo'<pre>';
print_r($septintas);

// 8.Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.
// Skaičiuoti reikia visuose masyvuose ir submasyvuose.
echo'Uzduotys Nr 8.'.'<br><br>';
$sum1 = 0;
$sum = 0;

 
for ($i=0; $i <= $numer - 1; $i++) { 
 $sum += $septintas[$i];
}
echo'$sum = '.$sum.'<br>';
for ($i=0; $i < $numer1; $i++) { 
  $sum1 += $mazas1[$i];
}
echo'$sum1 = '.$sum1.'<br>';
$sumBendra = $sum + $sum1;
echo'$sumBendra = '.$sumBendra.'<br>';
