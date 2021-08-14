<?php
// 4.Parašykite funkciją, kuri skaičiuotų, 
// iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
// Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo'Uzduotys Nr 4.'.'<br>';

function nr3(int $par3){
      $kiek = 0;
for ($i= $par3; $i > 0; $i--) {
      $rez = $par3 % $i;
if  ($rez === 0 && $i != 1 && $i != $par3){
      $kiek++;
    echo$i.'<br>';
  
  }
  
}
    echo '$par3 = '.$par3.'<br>';
    echo'$kiek = '.$kiek.'<br>';
    return $kiek ;
   }
  
   nr3(rand(33,77));
   $par = rand(33,77);