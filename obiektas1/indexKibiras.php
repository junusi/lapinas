<?php
require __DIR__.'/kibiras.php';


$Kibiras = new Kibiras();

$Kibiras->pridetiAkmeni();
$Kibiras->pridetiDaugAkmenu(10);
$Kibiras->kiekPririnktaAkmenu();
echo"<pre>";
var_dump($Kibiras);
echo'<br>';
































