<?php
$masyvas = [];
echo'<pre>';


//$masyvas['kojines'] = 7;
$masyvas[] = 88;
$masyvas['9966'] = 44;
$masyvas['669'] = 99;
$masyvas[] = 'tatata';
array_push($masyvas,'blablabla') ;

$masyvas1 = ['77a'=> 4,'uu'=>5,'labas'];

$masyvas1 = $masyvas;
//print_r($masyvas);
//print_r($masyvas1)ж
$colors2 = [];

$colors = ['red','i'=>'green', 'blue', 'yellow'];

//foreach ($colors as $key => &$value) {}
//unset($value);
  
foreach ($colors as $key => $value) {
   
  
  
  echo 'Reikšmė: ' . $value . '<br>';
  // echo 'Stalcius: ' .$key . '<br>';
  //$colors[$key] = 'black';
  //unset($colors[$key]);

}
//print_r($colors);
//unset($colors[$key]);



$A =8;

$B = $A;//pagal reiksme by value
$B = &$A;//pagal nuorada by reference
$C = &$B;
$A = 10;
$B = 22;
$C = 'labas';
echo"A = $A B = $B C = $C".'<br>';

//for ($i=1; $i <= 5; $i++) { 
 // echo"Skaicius yra $i".'<br>';
//}

foreach(range(1,10,2) as $i){
   echo"Skaicius yra $i".'<br>';
}

//usort($colors,fn($a,$b) => $b <=> $a);
print_r($colors);
asort($colors);
print_r($colors);
sort($colors);
print_r($colors);
