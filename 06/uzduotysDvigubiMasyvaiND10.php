<?php
/*                                                                       
10.Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
 Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color.
 Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡,
  o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
*/
echo'Uždavinys Nr 10.'.'<br>';
function color($parametras)
{$masyvasRaides=[0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F'];
$i = 0;
$text = '#';
while ($i <= $parametras){ 
  $raides = $masyvasRaides[rand(0,(count($masyvasRaides)) - 1)];
  $text .= $raides;
  $i++; 
}
 return $text;

}
$ier1 = '#%+*';$ier2 = '@裡';
$masyvas10 = [];
    foreach (range(0,9) as $key => $value) {
        $masyvas10[$key] = $value;
        if ($key % 2 != 0) {
        for ($i=0; $i < 10; $i++) { 
          $masyvas55[$i] = $i;
         } 
        $masyvas10[$key] = $masyvas55;
        }else{
          for ($i=0; $i < 2; $i++) { 
    $masyvasName[$ier2] = color(6);
    $masyvasName[$ier1] = color(6);
           } 
        $masyvas10[$key] = $masyvasName;
          }
        } 

        echo'<pre>';
        print_r($masyvas10);
        $s1 = 8;
        $color = '';
   ; 
    



?>

