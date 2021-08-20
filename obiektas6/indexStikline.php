<?php
require __DIR__.'/Stikline.php';

$Stikline1 = new Stikline(100);
$Stikline2 = new Stikline(150);
$Stikline3 = new Stikline(200);

echo  $Stikline3->ipilti(80);
echo'<br>';
echo  $Stikline2->ipilti($Stikline3->ispilti());
echo'<br>';
echo  $Stikline1->ipilti($Stikline2->ispilti());
echo'<br>';
echo$Stikline1->ispilti();
