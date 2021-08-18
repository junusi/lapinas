<?php
require __DIR__.'/Pinigine.php';

$Pinigine = new Pinigine();
$sumPopieriniaiPinigai = 0;
$sumMetaliniaiPinigai = 0;
 for ($i=0; $i < 5; $i++) {
     $kiekis = rand(1,5);  
if ($kiekis <= 2) {
    $sumMetaliniaiPinigai += $kiekis;
} else {
    $sumPopieriniaiPinigai += $kiekis;
}
 }