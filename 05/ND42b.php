<?php
$masyvas =[];
$max = [];
$maxVal = PHP_INT_MIN;
foreach(range(1,30) as $_){
$masyvas[] = rand(5,25);
}
$max = [];
$maxVal = PHP_INT_MIN;
foreach($masyvas as $key => $val){
if($val > $maxVal){
$max = [];
$maxVal = $val;
}
if ($val == $maxVal) {
  $max [] =$key;
}
}
echo'<pre>';
print_r($masyvas);
print_r($max);