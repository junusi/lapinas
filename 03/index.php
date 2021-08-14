<?php

//         IFU NESTAI

$obuolys = true;
$bananas = true;
$stikline = true;

if ($obuolys) {
    if ($bananas) {
      echo'Geriu obuoliu ir bananu sultis';
    }
}
echo'<br>';

if ($obuolys && $bananas) {
    echo'Geriu obuoliu ir bananu sultis';
}

echo'<br>';

if ($stikline) {
   if ($obuolys && $bananas) {
    echo'Geriu obuoliu ir bananu sultis';
   } else if($obuolys) {
    echo'Geriu obuoliu sultis';
   } else if($bananas) {
    echo'Geriu bananu sultis';
   }
   
}

echo'<br>';

if ($stikline && $obuolys && $bananas) {
    echo'Geriu obuoliu ir bananu sultis';
} else if($stikline && $obuolys) {
    echo'Geriu obuoliu sultis';
   } else if($stikline && $bananas) {
    echo'Geriu bananu sultis';
   }