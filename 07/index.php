<?php
//                /08/index.php  
echo'<hr>';
//1Uzduotis.

/*$arraylabas = [];
foreach (range(0,30) as $key => $value) {
    $arraylabas[] = rand(20,40);
    
}


print_r($arraylabas).'<br>';

for ($i=0; $i <= 30; $i++) { 
if ($i < 30) {
    echo $arraylabas[$i].' ,';
} else {
    echo $arraylabas[$i];
}  
}
echo'<br>';
count($arraylabas);// funkcija kuri skaiciuoja kiek masive yra elementu.
echo (count($arraylabas));*/
//2.
$mas = [];
$mas1 = [];
foreach (range(0,9) as $key => $value) {
    $mas [] = rand(0,9);
}
echo'<br>';
for ($i=0; $i < 10; $i++) { 
    $mas1 [] = $i + 10;
}

print_r($mas);
var_dump($mas1);
echo"<br>";
for ($i=1; $i <= 100; $i++) { 
    $atsitiktinis = rand(0,9); 
    echo$mas1[$atsitiktinis].' ';
    }
  echo"<br>" ; 
//3..
  $mas2 = [];
foreach (range(0,9) as  $stalcius) {
    
 foreach (range(0,9) as $key1 =>$skirelis) {
    $mas2[$stalcius][$skirelis] = $key1 ;
    
     echo $mas2[$key1][$skirelis] = $key1  ; echo" ";
 }
 
 echo$mas2[$key] = $stalcius."<br>"; 
}
echo'<pre>';
print_r($mas2