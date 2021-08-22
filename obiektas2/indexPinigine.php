<?php
require __DIR__.'/Pinigine.php';

$pinigine = new Pinigine();

for($i = 0;$i < 10;$i++){
    $kiekis = rand(1,10);
    echo$kiekis.'<br>';
    $pinigine->ideti($kiekis);
}

echo'PopieriniaiPinigai ir metaliniaiPinigai sumą = '.($pinigine->skaiciuoti()).'<br>';
echo'<br>';
var_dump($pinigine);



   




















