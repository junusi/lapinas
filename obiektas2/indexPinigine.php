<?php
require __DIR__.'/Pinigine.php';

$Pinigine = new Pinigine();

$kiekis = 0;
$Pinigine->ideti($kiekis);
$PopieriniaiPinigai = 0;
$MetaliniaiPinigai = 0;
 for ($i=0; $i < 5; $i++) {
    $kiekis = rand(1,10);
if ($kiekis <= 2) {
    $MetaliniaiPinigai += $Pinigine->ideti($kiekis);
} else {
    $PopieriniaiPinigai += $Pinigine->ideti($kiekis);
}
 }



   
echo'<br>';
echo $Pinigine->skaiciuoti();

echo"<pre>";
var_dump($Pinigine);
echo'<br>';



















