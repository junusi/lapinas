<?php

$a = 0.5;
$b = 0.7;
$c = 15;
$d = -0.7777777;

// deklaracija
function nr1($par1, $par2) {
    $ats = cos($par1) * cos($par2) * sin($par2);
    echo '<br>'.$ats;
    return $ats;
}

function nr2($par1, $par2) {
    $ats = $par1 * tan($par2);
    echo '<br>'.$ats;
    return $ats;
}


//1
$d1 = cos($a) * cos($b) * sin($b);
echo '<br>'.$d1;
//2
$d2 = $d1 * tan($c);
echo '<br>'.$d2;
//3
$d3 = cos($d2) * cos($d) * sin($d);
echo '<br>'.$d3;
//4
$d4 = $d3 * tan($c);
echo '<br>'.$d4;