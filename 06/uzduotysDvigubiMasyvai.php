
<?php

//        localhost:8080/lapestart/06/uzduotysDvigubiMasyvai.php                     DVIGUBI MASYVAI
echo'<pre>';
/*
1. Sugeneruokite masyvą iš 10 elementų, 
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
echo'Uždavinys Nr 1.'.'<br>';
echo'<pre>';
$masyvas = [];

foreach (range(0,9) as $key ) {
foreach (range(0,4) as $key1 => $value1) {
  $masyvas[$key][$key1] = rand(5,25);
  //$mas[$key1] = rand(5,25);
 } 
}
//$masyvas[$key] =  $mas;


print_r($masyvas);
/*
2.Naudodamiesi 1 uždavinio masyvu:
*/

echo'Uždavinys Nr 2.'.'<br>';
echo' a.)dalis'.'<br>';
 // a.) Suskaičiuokite kiek masyve yra elementu  didesniu uz 10 ;
 $elementasDidesnis10 = 0;
 foreach ( $masyvas as $key) {
 foreach ( $key as $key1 => $value1 ) {
  if($value1 < 10 ){
    $elementasDidesnis10++;
  }
 }
}
echo'elementu  didesniu uz 10 yra : '.$elementasDidesnis10.'<br>';
// b.) Raskite didžiausio elemento reikšmę;
 echo' b.)dalis'.'<br>';
$max = 0;
$max1 = 0;
  foreach ($masyvas as  $key) {
  foreach ($key as  $key1 => $value1) {
     if($max < $value1) {
     $max = $value1;
  }
  }
  }
  echo'Didžiausio elemento reikšmę : '.$max.'<br>';
  foreach ($masyvas as  $key => $value) {
    foreach ($value as  $key1 => $value1) {
       if($max == $value1) {
     echo '$masyvas'.'['.$key.']'.'['.$key1.'] = '. $value1.'<br>';
    
       $max1++;
    }
    }
    
    }
    echo'Tokiu didžiausio elemento reikšmiu yra : '.$max1.'<br>';
 // c.) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais
 // sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
 echo' c.)dalis'.'<br>';

 $sum1 = 0;
 $sum2 = 0;

 foreach ($masyvas as  $key => $value) {
  foreach ($value as  $key1 => $value1) {
   if ($key % 2 != 0 && $key1 % 2 != 0 && $key1 == 1) {
    echo'$masyvas['.$key.']['.$key1.'] = '.$masyvas[$key][$key1] = $value1.'; '; 
    $sum1 += $value1;
   }else{if($key % 2 != 0 && $key1 % 2 != 0 && $key1 == 3){
    echo'$masyvas['.$key.']['.$key1.'] = '.$masyvas[$key][$key1] = $value1.'; '; 
     $sum2 += $value1;
   }
  }
     } 
     echo'<br>'; 
}
echo'<br>';
echo'$sum $masyvas[$key[1]$key1[1] + $key[3]$key1[1] + $key[5]$key1[1] + $key[7]$key1[1] + $key[9]$key1[1] ] = '.$sum1.';'.'<br>';
echo'$sum $masyvas[$key[1]$key1[3] + $key[3]$key1[3] + $key[5]$key1[3] + $key[7]$key1[3] + $key[9]$key1[3] ] = '.$sum2.';'.'<br>';
echo'<br>';
 // d.) Visus masyvus “pailginkite” iki 7 elementų
 echo' d.)dalis'.'<br>';
 foreach (range(0,9) as $key => $value) {
  foreach (range(0,6) as $key1 => $value1) {
    $masyvas[$key][$key1] = rand(5,25);
   } 
  }
  print_r($masyvas);
 // e.) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą 
 // atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą.
 // T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo,
 // turinčio indeksą 0 dideliame masyve, visų elementų sumai.
 echo' e.)dalis'.'<br>';
 $sumE = 0;
 $masyvasE = [];
 foreach ($masyvas as  $key => $value) {
  if ($key % 2!= 0) {
  foreach ($value as $key1 => $value1) {
    $sumE += $value1;
  }
  echo'$Masyvas2 ['.$key.'] => Array, elementų sumą lygu '.$sumE.';'.'<br>';
  $masyvasE[] = $sumE;
  $sumE = 0; 
  }
}
echo'<br>';
echo '$masyvasE ;'.'<br>';
var_dump($masyvasE);
/*
3.Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas 
turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų.
 Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z.
  Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo'Uždavinys Nr 3.'.'<br>';
echo'<pre>';
$masyv3 = [];
$masyv33 = [];
$masyvasRaides = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    for ($b = 0;$b < 10;$b++) {
    $masyv3[$b] = $b;
    for ($a = 0; $a < rand(2,20);$a++ ) {
    $masyv33[$a] = $masyvasRaides[rand(0,(count($masyvasRaides)) - 1)];
    $r = 0;
    while ($r < count($masyvasRaides)){
    for ($i= 0; $i < count($masyv33) - 1; $i++) { 
    for ($j= $i + 1; $j < count($masyv33); $j++) { 
       if ($masyv33[$i] === $masyvasRaides[$r]) {
         $laikina = $masyv33[$i] ;
         $masyv33[$i] = $masyv33[$j];
         $masyv33[$j] = $laikina;
       }
      }  
     }
      $r++;
    }
    }
    $masyv3[$b] = $masyv33;
  }
  print_r($masyv3);
/*
4.Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
kad elementai kurių masyvai trumpiausi eitų pradžioje.
 Masyvai kurie turi bent vieną “K” raidę, 
 visada būtų didžiojo masyvo visai pradžioje.
*/
echo'Uždavinys Nr 4.'.'<br>';






/*
5.Sukurkite masyvą iš 30 elementų.
Kiekvienas masyvo elementas yra masyvas [user_id => xxx,place_in_row => xxx]  
 user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, 
place_in_row atsitiktinis skaičius nuo 0 iki 100. 
*/
echo'Uždavinys Nr 5.'.'<br>';
$masyvas5 = [];
$masyvas55 = [];
foreach (range(0,29) as $key => $value) {
  $masyvas5[$key] = $key;
  for ($i=0; $i < 2; $i++) { 
    $masyvas55['user_id'] = rand(1,1000000);
    $masyvas55['place_in_row'] = rand(1,100);
   } 
$masyvas5[$key] = $masyvas55;
}
print_r($masyvas5);

echo'Uždavinys Nr 6.'.'<br>';

  for ($key= 0; $key < count($masyvas5) - 1; $key++) { 
  for ($key1= $key + 1; $key1 < count($masyvas5); $key1++) { 
     if ($masyvas5[$key]['user_id'] > $masyvas5[$key1]['user_id'] ){
       $laikina = $masyvas5[$key]['user_id'];
       $masyvas5[$key]['user_id']  = $masyvas5[$key1]['user_id'] ;
       $masyvas5[$key1]['user_id']  = $laikina;
     }
    }  
   }
   print_r($masyvas5).'<br>';
   echo ' masyvąs išrūšiuotas pagal place_in_row mažėjančia tvarka.'.'<br>';

   for ($key= 0; $key < count($masyvas5) - 1; $key++) { 
    for ($key1= $key + 1; $key1 < count($masyvas5); $key1++) { 
       if ($masyvas5[$key]['place_in_row'] < $masyvas5[$key1]['place_in_row'] ){
         $laikina = $masyvas5[$key]['place_in_row'];
         $masyvas5[$key]['place_in_row']  = $masyvas5[$key1]['place_in_row'] ;
         $masyvas5[$key1]['place_in_row']  = $laikina;
       }
      }  
     } 
     print_r($masyvas5).'<br>';
//septinta uzduotis
echo'Uždavinys Nr 7.'.'<br>';

function nameSurname($parametras)
{$masyvasRaides = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$i = 0;
$text = '';
while ($i <= $parametras){ 
  $raides = $masyvasRaides[rand(0,(count($masyvasRaides)) - 1)];
  $text .= $raides;
  $i++; 
}
 return $text;
}

  $masyvasName = []; 
  $masyvas55 = [];
foreach (range(0,29) as $key => $value) {
  $masyvas5[$key] = $value;
  if ($key % 2 != 0) {
  for ($i=0; $i < 2; $i++) { 
    $masyvas55['user_id'] = rand(1,1000000);
    $masyvas55['place_in_row'] = rand(1,100);
    $masyvas55['name'] = nameSurname(rand(5,15));
    $masyvas55['surname'] = nameSurname(rand(5,15));
   } 
  $masyvas5[$key] = $masyvas55;
  }else{
    for ($i=0; $i < 2; $i++) { 
      $masyvasName['user_id'] = rand(1,1000000);
      $masyvasName['place_in_row'] = rand(1,100);
     } 
  $masyvas5[$key] = $masyvasName;
    }
  } 
print_r($masyvas5);
echo'<br>';
/*
8.Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite
 pagal taisyklę: generuokite skaičių nuo 0 iki 5.
 Ir sukurkite tokio ilgio masyvą. 
Jeigu reikšmė yra 0 masyvo nekurkite. 
Antro lygio masyvo reikšmes užpildykite atsitiktiniais
 skaičiais nuo 0 iki 10.
 Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
*/
echo'Uždavinys Nr 8.'.'<br>';
$sum = 0;
$masyvas = [];
$masyvas9 = [];
$masyvas8 = [];
for($i = 0;$i <10;$i++){
  $reiksme = rand(0,5);
if ($reiksme == 0 ) {
  $masyvas8[$i] = $sk = $i;
  $masyvas9[] = $sk;
  $masyvas10[] = $sk;
} else {if($i % 2 != 0 & $reiksme != 0){
                   $sum = 0;
           for ($j=0; $j < 10; $j++) { 
             $masyvas8[$i][$j] = $sk1 = rand(0,9);
             $masyvas9[] = $sk1;
             $sum += $sk1;
            }
            $masyvas10[] = $sum;
           }else{if ($reiksme != 0 & $i % 2 == 0) {
            $sum = 0;
           for ($j=0; $j < 10; $j++) { 
           $masyvas8[$i][$j] = $sk2 =rand(0,9);
           $masyvas9[] = $sk2;
           $sum += $sk2;
    }
    $masyvas10[] = $sum;
   }       
  }
 } 
 echo '$reiksme['.$i.'] = '.$reiksme.' <br>';
}
echo'<br>';
print_r($masyvas8);


/*
9.Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą 
ir išrūšiuokite masyvą taip, 
kad pirmiausiai eitų mažiausios masyvo reikšmės arba 
jeigu reikšmė yra masyvas,
 to masyvo reikšmių sumos.
*/

echo'Uždavinys Nr 9.'.'<br>';
$suma = 0;
for ($i=0; $i < count($masyvas9); $i++) { 
  $suma += $masyvas9[$i];
}
for ($i = 0; $i < count($masyvas10) - 1; $i++) {
  for ($j = $i + 1; $j < count($masyvas10); $j++) {
      if ($masyvas10[$i] > $masyvas10[$j]) {
          $tmp = $masyvas10[$i];
          $masyvas10[$i] = $masyvas10[$j];
          $masyvas10[$j] = $tmp;
      }
  }
}
print_r($masyvas10);
echo'masyvo visų reikšmių sumą lygu '.$suma.'<br>';
