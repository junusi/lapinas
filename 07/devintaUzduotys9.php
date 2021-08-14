<?php

//          devintaUzd9.php

// 9.Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
//  Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, 
//  prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. 
//  Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą.
//  Kartokite, kol sąlyga nereikalaus pridėti elemento. 
echo'Uzduotys Nr 9.'.'<br>';
echo'<pre>';
$arraytris = [];

function nr3(int $par3){
    $kiek = 0;
for ($i= $par3; $i > 0; $i--) {
    $rez = $par3 % $i;
if  ($rez === 0 && $i != 1 && $i != $par3){
    $kiek++;
 }
}
  return $kiek ;
 }
//*********************************************************************************************************************************** */
  foreach (range( 0,2) as $key => $value) {
    $arraytris[] = rand(1,33); 
  }



nr3($arraytris[$key]);
if (nr3($arraytris[$key]) == 0) {
    $h = rand(1,33);
    $arraytris[] = $h;
   
}










if (($key + 1) <=1) {
   $h = ' elementas,';
} else {if (($key + 1) > 1 & ($key + 1) < 10) {
    $h = ' elementai,';
}else{
   $h = ' elementu,';
 }
}

var_dump($arraytris);


  
//************************************************************************************************************************************ */        

   















// 10.Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, 
// kurie yra atsitiktiniai skaičiai nuo 1 iki 100.
// Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, 
// suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 
// Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartok

