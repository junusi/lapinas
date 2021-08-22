<?php
require __DIR__ .'/TV.php';

$tv1 = new TV(42);
$tv2 = new TV(42);
$tv3 = new TV(55);
TV::$programs = [1 => 'LRT', 2 => 'LNK', 3 => 'TV Polonia'];

$tv1->sellTo('Petras');
$tv1->switchCanel(2);
$tv3->sellTo('Valentina');
$tv3->switchCanel(2);




echo '<pre>';
print_r($tv1);
print_r($tv2);
print_r($tv3);


































