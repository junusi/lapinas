<?php
//                     uzduotysFunkcijas.php

// 1.Parašykite funkciją, kurios argumentas būtų tekstas,
// kuris yra įterpiamas 
//  į h1 tagą;
echo'Uzduotys Nr 1.'.'<br>';
function nr1($par1){
 echo '<h1>'.$par1.'</h1>'.'<br>';
 return ;
}
 nr1('Hello World');
// 2.Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
//  įterpiamas į h tagą, o antrasis tago numeris (1-6). 
// /Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
echo'Uzduotys Nr 2.'.'<br><br>';
function nr2($par1,$par2){
  ?>
  <
  <?php 
echo'h'.$par2;
  ?>
   >
   <?php
echo $par1;
  ?>
  <
  <?php
echo'/h'.$par2.'>'.'<br>';
echo'<br>';
echo' h tago numeris yra : '.$par2.'<br>';
    return ;
   }
   nr2('Hello World', rand(1,6));
echo'<br>';
// 3.Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()).
// Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
// Jegu iš eilės eina keli skaitmenys, 
// juos į tagą reikią dėti kartu
// (h1 atsidaro prieš pirmą ir užsidaro po paskutinio)
// Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio
// funkciją ir preg_replace_callback();
echo'Uzduotys Nr 3.'.'<br>';
$input = md5(time());
 echo$input.'<br>'; 
// function h1(string|array ,$data):void     - PHP 8 versija.
function h1($data):string
{
if(is_array($data)){
  $data = $data[0]; 
}
return '<h1 style="display:inline-block;">'.$data.'</h1>';
}
$input = preg_replace_callback('/\d+/','h1',$input);
echo $input.'<br>';
// 4.Parašykite funkciją, kuri skaičiuotų, 
// iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
// (išskyrus vienetą ir patį save)
// Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

echo'Uzduotys Nr 4.'.'<br>';

function nr3(int $par3){
  $kiek = 0;
for ($i= $par3; $i > 0; $i--) {
      $rez = $par3 % $i;
if  ($rez === 0 && $i != 1 && $i != $par3){
      $kiek++;
     echo'sveikas skaičiųs '.$i.' ;<br>';
  }
}
if($kiek == 0){
echo'funkcijos argumentas yra pirminis skaicius ;'.'<br>';
}
echo 'funkcijos argumentas $par3 ='.$par3.' ;<br>';
echo '$kiek = '.$kiek.' ;<br>'; 
    return $kiek ;
   }
   
   nr3(rand(33,77));
// 5.Sugeneruokite masyvą iš 100 elementų,
//  kurio  atsitiktiniai skaičiai nuo 33 iki 77.
// Išrūšiuokite masyvą pagal daliklių be liekanos kiekį 
// mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

 echo'Uzduotys Nr 5.'.'<br>';
 function nr10(int $par3){
  $kiek = 0;
for ($i= $par3; $i > 0; $i--) {
      $rez = $par3 % $i;
if  ($rez === 0 && $i != 1 && $i != $par3){
      $kiek++;
  }
}
    return $kiek ;
   }
 $masyvas5 = [];
 for ($i=0; $i < 100; $i++) { 
  $masyvas5[$i] = $i;}
 echo'<pre>'; 

 foreach ($masyvas5 as $key => $value) {
  $mazas = [];
 foreach (range(0,1) as $value1) {
  $mazas[0] = rand(33,77);
  $mazas[1] = nr10($mazas[0]);
 }
 $masyvas5[$key] = $mazas;
}

echo'Išrūšiuotas masyvąs mažėjimo tvarka pagal daliklių be liekanos kiekį :'.'<br>';
  for ($i = 0; $i < 99; $i++) {
  for ($j = $i + 1; $j < 100; $j++) {
          if ($masyvas5[$i][1] < $masyvas5[$j][1]) {
          $min = $masyvas5[$i][1];
          $masyvas5[$i][1] = $masyvas5[$j][1];
          $masyvas5[$j][1] = $min;
      }
  }
}
print_r($masyvas5);
// 6.Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai 
// skaičiai nuo 333 iki 777.
// Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

echo'Uzduotys Nr 6.'.'<br>';
for ($i=0; $i < 100; $i++) { 
  $masyvas6[$i] = $i;}
 echo'<pre>'; 

foreach ($masyvas6 as $key => $value) {
  $mazas = [];
 foreach (range(0,1) as $value1) {
  $mazas[0] = rand(333,777);
  $mazas[1] = nr10($mazas[0]);
 }
 $masyvas6[$key] = $mazas;

 if($mazas[1] === 0){
 unset($masyvas6[$key]);
 }
}
print_r($masyvas6);
