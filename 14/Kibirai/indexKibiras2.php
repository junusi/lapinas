<?php
require __DIR__ .'/Kibiras2.php';
require __DIR__ .'/vendor/autoload.php';
$kibiras1 = Kibiras2::getKibiras2();
$kibiras2 = Kibiras2::getKibiras2();
$kibiras3 = Kibiras2::getKibiras2();
//$kibiras3 = clone($kibiras1);
//$kibiras3 = unserialize(serialize($kibiras1)) ;




$kibiras1->pridetiAkmeni();
$kibiras2->pridetiAkmeni();
$kibiras3->pridetiDaugAkmeni(5);



$kibiras1->kiekPririnktaAkmenu();
$kibiras2->kiekPririnktaAkmenu();
$kibiras3->kiekPririnktaAkmenu();
echo($kibiras3('Labas'));