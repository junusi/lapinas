<?php

//                                                      VIENGUBI MASIVAI

/*
1.Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29),
 kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/
echo'<pre>';
$mas1 = [];
$mas = [];

for ($i=0; $i < 29; $i++) { 
   $mas1[$i] = rand(5,25);
}
echo'<pre>';
print_r($mas1);
foreach (range(0,29) as $key => $value) {
   $mas[] = rand(5,25);
}
echo'<pre>';
print_r($mas);
/*
2.Naudodamiesi 1 uždavinio masyvu:
*/
echo' a.)dalis'.'<br>';
// a.) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$reiksmiuDidesniu10 = 0;
foreach ($mas as $key => $value) {
   if ($value > 10) {
       $reiksmiuDidesniu10++;}}
echo'reikšmių didesnių už 10 yra : '.$reiksmiuDidesniu10.'<br>';
echo' b.)dalis'.'<br>';

// b.) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$max = 0;
for($i = 0;$i < 29;$i++){
       if ($max < $mas[$i]) {
        $max = $mas[$i];}}   
       echo'didžiausią masyvo reikšmę : '.$max.'<br>';
foreach ($mas as $key => $value) {
       if ($value === $max) {
       echo'$mas['. $key.'] => '. $value.'<br>';  }}

// c.) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą; 
echo' c.)dalis'.'<br>';
$sum = 0;     
foreach ($mas as $key => $value) {
    if ($key % 2 === 0) {
        $sum +=  $key;}}
echo'Visų porinių (lyginių) indeksų reikšmių sumą : '.$sum.'<br>';

// d.) Sukurkite naują masyvą, 
//     kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

echo' d.)dalis'.'<br>';
$mas2 = [];
foreach ($mas as $key => $value) {
   $mas2[] = $value - $key;}
print_r($mas);
print_r($mas2);

//  e.) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25,
//      kad bendras masyvas padidėtų iki indekso 39;
echo' e.)dalis'.'<br>';
$mas3 = [];
foreach (range(0,9) as $key => $value) {
 $mas[] = $mas3[] = rand(5,25);}
print_r($mas);

// f.) Iš masyvo elementų sukurkite du naujus masyvus.
//     Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

echo' f.)dalis'.'<br>';
$masPorinis = [];
$masNeporinis = [];
foreach ($mas as $key => $value) {
    if ($key % 2 === 0) {
        $masPorinis[] = $value;
    } else {
        $masNeporinis [] = $value;}}
echo'Masyvas is porinių indekso reikšmių'.'<br>'; print_r($masPorinis);
echo'Masyvas is neporinių indekso reikšmių'.'<br>'; print_r($masNeporinis);
/*
// g.) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
*/
echo' g.)dalis'.'<br>';
foreach ($mas as $key => $value) {
   if ($key % 2 === 0 && $value > 15) {
    $mas[$key] = 0;}}
 echo'masyvo elementai su poriniais indeksais padaryti lygius 0 jeigu jie didesni už 15'.'<br>';
 print_r($mas);  
// h.) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
echo' h.)dalis'.'<br>';
$min = 0;
foreach ($mas as $key => $value) {
    if ($value > 10) {
       echo' pirmąs (mažiausiąs) indeksąs, kurio elemento reikšmė didesnė už 10'.'<br>';
       echo'$mas ['.$key.'] = '.$value.'<br>';
       break;
}}
// i.) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
echo' i.)dalis'.'<br>';
foreach ($mas as $key => $value) {
  if ($key % 2 === 0) {
 unset($mas[$key]);
  }}
  print_r($mas);
/*
3.Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200.
 Suskaičiuokite kiek yra kiekvienos raidės.
*/
echo'Uždavinys Nr 3.'.'<br>';
$raidziuMasyvas = [];
$a = 0;$A = 0;$B = 0;$C = 0;$D = 0;
for ($i=0; $i < 200; $i++) { 
    $a = rand(1,4);
    if ($a === 1) {
        $raidziuMasyvas[$i] = 'A';
        $A++;
    } else {if ($a === 2) {
        $raidziuMasyvas[$i] = 'B';
        $B++;
    } else {if ($a === 3) {
        $raidziuMasyvas[$i] = 'C';
        $C++;
    } else {
        $raidziuMasyvas[$i] = 'D';
        $D++;
    }}}}
 echo'A - raidziu yra :'.$A.' ; B - raidziu yra :'.$B.' ; C - raidziu yra :'.$C.' ; D - raidziu yra :'.$D.'<br>' ;
 print_r($raidziuMasyvas);
/*
4.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/
 echo'Uždavinys Nr 4.'.'<br>';
 sort($raidziuMasyvas);
 print_r($raidziuMasyvas);
 echo'<br>';
/*
5.Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes.
 Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
*/
echo'Uždavinys Nr 5.'.'<br>';
$raidziuMasyvas1 = [];
$raidziuMasyvas2 = [];
$raidziuMasyvas3 = [];
$suma = [];
$a = 0;$A = 0;$B = 0;$C = 0;$D = 0;
for ($i=0; $i < 200; $i++) { 
    $a = rand(1,4);
    if ($a === 1) {
        $raidziuMasyvas1[$i] = 'A';
    } else {if ($a === 2) {
        $raidziuMasyvas1[$i] = 'B';
    } else {if ($a === 3) {
        $raidziuMasyvas1[$i] = 'C';
    } else {
        $raidziuMasyvas1[$i] = 'D';
    }}}}
    for ($i=0; $i < 200; $i++) { 
        $a = rand(1,4);
        if ($a === 1) {
            $raidziuMasyvas2[$i] = 'A';
        } else {if ($a === 2) {
            $raidziuMasyvas2[$i] = 'B';
        } else {if ($a === 3) {
            $raidziuMasyvas2[$i] = 'C';
        } else {
            $raidziuMasyvas2[$i] = 'D';
        }}}}
        for ($i=0; $i < 200; $i++) { 
            $a = rand(1,4);
            if ($a === 1) {
                $raidziuMasyvas3[$i] = 'A';
            } else {if ($a === 2) {
                $raidziuMasyvas3[$i] = 'B';
            } else {if ($a === 3) {
                $raidziuMasyvas3[$i] = 'C';
            } else {
                $raidziuMasyvas3[$i] = 'D';
            }}}}
            for ($i=0; $i < 200; $i++) { 
                $suma[$i] = $raidziuMasyvas1[$i].$raidziuMasyvas2[$i].$raidziuMasyvas3[$i];
            }
            print_r($suma);
            echo'<br>';
            $result = [] ;    
            $result = array_unique($suma);
            sort($result);
            print_r($result);
/*
6.Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100.
 Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
*/
echo'Uždavinys Nr 6.'.'<br>';
$masyvasPirmas = [];
$masyvasAntras = [];
foreach (range(0,99) as $key => $value) {
    $$masyvasPirmas[] = rand(100,999);
    $masyvasAntras[] = rand(100,999);

 }
 print_r($$masyvasPirmas);
 print_r($$masyvasAntras);
/*
7.Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/




/*
8.Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
*/



/*
9.Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės,
 o jo reikšmės iš būtų antrojo masyvo.
*/



/*
10.Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
 Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
*/



/*
11.Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. 
Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip,
 kad visos reikšmės masyve būtų unikalios. 
Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje,
 o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų.
 Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės).
 Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. 
 (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)
*/
