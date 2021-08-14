<?php
/*   uzduotis.php
2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
 Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/
echo'<br>';
echo' 2 . ';
echo'<br>';
$skaicius1 = rand(0, 4);
$skaicius2 = rand(0, 4);
if ($skaicius1 > $skaicius2 && $skaicius2 != 0 ) {
    echo'$dalyba = '.round (($skaicius1 / $skaicius2),2);
} else {if ($skaicius1 != 0 && $skaicius2 > $skaicius1) {
    echo'$dalyba = '.round (($skaicius2 / $skaicius1),2);
 }else{
     echo'dalyba neimanoma';
 }
}


echo'<br>';
echo' $skaicius1 = '.$skaicius1;
echo'<br>';
echo '$skaicius2 = '.$skaicius2;
/*3.Naudokite funkcija rand().
Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. 
*/
echo'<br>';
echo' 3 . ';
echo'<br>';
$skaicius1 = rand(0, 25);
$skaicius2 = rand(0, 25);
$skaicius3 = rand(0, 25);
echo$skaicius1.' ; ',$skaicius2.' ; ',$skaicius3;
echo'<br>';
echo'$vidurineReikšme1 = $skaicius1 + $skaicius2 / 2 = '.(($skaicius1 + $skaicius2) / 2);
echo'<br>';
echo'$vidurineReikšme2 = $skaicius2 + $skaicius3 / 2 = '.(($skaicius2 + $skaicius3) / 2);
echo'<br>';
echo'$vidurineReikšme3 = $skaicius1 + $skaicius3 / 2 = '.(($skaicius1 + $skaicius3) / 2);
/* 
4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
echo'<br>';
echo' 4 . ';
echo'<br>';
echo'$a = '.$a = rand(0, 10);
echo'<br>';
echo'$b = '.$b = rand(0, 10);
echo'<br>';
echo'$c = '.$c = rand(0, 10);
echo'<br>';
if ($a < $b + $c  &&  $b < $a + $c &&  $c < $a + $b ) {
   echo' trikampį sudaryti galima  ';
} else {
    echo' trikampį sudaryti negalima  ';
}
/*
 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/
echo'<br>';
echo' 5 . ';
echo'<br>';
echo'$a1 = '.$a1 = rand(0, 2);
echo'<br>';
echo'$a2 = '.$a2 = rand(0, 2);
echo'<br>';
echo'$a3 = '.$a3 = rand(0, 2);
echo'<br>';
echo'$a4 = '.$a4 = rand(0, 2);
echo'<br>';
$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
if ($a1 +1 == 1) {
  $sum0 = $sum0 + 1;
} else {if ($a1 +1 == 2) {
    $sum1 = $sum1 + 1; 
}else{
    $sum2 = $sum2 + 1; 
}   
}
if ($a2 +1 == 1) {
    $sum0 = $sum0 + 1;
  } else {if ($a2 +1 == 2) {
      $sum1 = $sum1 + 1; 
  }else{
      $sum2 = $sum2 + 1; 
  }   
  }
  if ($a3 +1 == 1) {
    $sum0 = $sum0 + 1;
  } else {if ($a3 +1 == 2) {
      $sum1 = $sum1 + 1; 
  }else{
      $sum2 = $sum2 + 1; 
  }   
  }
  if ($a4 +1 == 1) {
    $sum0 = $sum0 + 1;
  } else {if ($a4 +1 == 2) {
      $sum1 = $sum1 + 1; 
  }else{
      $sum2 = $sum2 + 1; 
  }   
  }
echo' nulių yra = '.$sum0;
echo'<br>';
echo' vienetų yra = '.$sum1;
echo'<br>';
echo' dvejetų yra = '.$sum2;
echo'<br>';
/*
 6. Naudokite funkcija rand().
Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage.
Pvz skaičius 3- rezultatas: <h3>3</h3>
*/
echo'<br>';
echo' 6 . ';
echo'<br>';
$s = rand(1, 6);

?>
<
<?php 
echo'h'.$s;
?>
>
<?php
echo$s;
?>
<
<?php
echo'/h'.$s.'>';


/*
 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
*/
echo'<br>';
echo' 7 . ';
echo'<br>';
$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);
$Color1 = "green";
$Color2 = "blue";
$Color3 = "red";
echo'<br>';
if ($sk1 < 0) {
    echo'<div style="Color:'.$Color1.'">'.$sk1.'</div>'; 
} if ($sk1 == 0) {
    echo'<div style="Color:'.$Color3.'">'.$sk1.'</div>'; 
} if($sk1 > 0) {
    echo'<div style="Color:'.$Color2.'">'.$sk1.'</div>';  
}  

if ($sk2 < 0) {
    echo'<div style="Color:'.$Color1.'">'.$sk2.'</div>'; 
} if ($sk2 == 0) {
    echo'<div style="Color:'.$Color3.'">'.$sk2.'</div>'; 
} if ($sk2 > 0){
    echo'<div style="Color:'.$Color2.'">'.$sk2.'</div>';  
}  

if ($sk3 < 0) {
    echo'<div style="Color:'.$Color1.'">'.$sk3.'</div>'; 
} if($sk3 == 0) {
    echo '<div style="Color:'.$Color3.'">'.$sk3.'</div>'; 
} if ($sk3 > 0){
    echo'<div style="Color:'.$Color2.'">'.$sk3.'</div>';  
}  

/*
 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama.
 Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
*/
echo'<br>';
echo' 8 . ';
echo'<br>';
$zvakiuKiekis = rand(5,3000);

if ($zvakiuKiekis < 1000) {
   echo'$zvakiuKiekis = '.$zvakiuKiekis;
   echo'<br>';
   echo' 1 žvakes kaina , $zvakesKaina = 1 EUR';
} else {if ($zvakiuKiekis > 2000) {
    echo'$zvakiuKiekis = '.$zvakiuKiekis;
    echo'<br>';
    echo' 1 žvakes kaina , $zvakiesKaina = '.(0.96).' EUR';
} else {
    echo'$zvakiuKiekis = '.$zvakiuKiekis;
    echo'<br>';
    echo' 1 žvakes kaina , $zvakiesKaina = '.(0.97).' EUR';
 } 
}
/*
 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100.
 Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90.
  Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/
echo'<br>';
echo' 9 . ';
echo'<br>';
echo'$skaicius1 = '.$skaicius1 = rand(0,100);
echo'<br>';
echo'$skaicius2 = '.$skaicius2 = rand(0,100);
echo'<br>';
echo'$skaicius3 = '.$skaicius3 = rand(0,100);
echo'<br>';
echo'aritmetinįs vidurkįs = '.round((($skaicius1 + $skaicius2 + $skaicius3) / 3),0);
if ($skaicius1 < 10 || $skaicius1 > 90) {
    $skaicius1 = 0;
} 
if ($skaicius2 < 10 || $skaicius2 > 90) {
    $skaicius2 = 0;
}
if ($skaicius3 < 10 || $skaicius3 > 90) {
    $skaicius3 = 0;
}
echo'<br>';
echo'aritmetinįs vidurkįs1 = '.round((($skaicius1 + $skaicius2 + $skaicius3) / 3),0);
/*
 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand().
 Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko.
  Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/
  echo'<br>';
  echo' 10 . ';
  echo'<br>';
$valandos = rand(0,23);
$minutes  = rand(0,59);
$sekundes = rand(0,59);
echo'<br>';
echo' VALANDOS  '.$valandos.'  '.' MINUTES  '.'   '.$minutes.'  '.'   '.' SEKUNDES  '.$sekundes ;
echo'<br>';
$skaicius = rand(0,300);
echo '$skaicius = '.$skaicius;
echo'<br>';
echo '&prideti M= '.$pridetiM = floor($skaicius / 60);
echo'<br>';
echo'&pridetiS = '.$pridetiS = ($skaicius % 60);
echo'<br>';
$minutes = $minutes + $pridetiM;
$sekundes = $sekundes + $pridetiS;
if ($sekundes >= 60) {
    $sekundes = $sekundes - 60;
    $minutes = $minutes + 1;
}
if ($minutes >= 60) {
    $minutes = $minutes -69;
    $valandos = $valandos +1;
}
echo' VALANDOS  '.$valandos.'  '.' MINUTES  '.'   '.$minutes.'  '.'   '.' SEKUNDES  '.$sekundes ;
