<?php
require __DIR__.'/Pinigine2.php';

$Pinigine = new Pinigine();

for($i = 0;$i < 10;$i++){ 
    $kiekis = rand(1,10);
    $Pinigine->ideti($kiekis);
}
    $Pinigine->banknotai();
    $Pinigine->monetos();
echo '<pre>';
var_dump($Pinigine);





