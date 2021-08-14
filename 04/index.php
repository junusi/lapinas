<?php




//Uždavinys Kiek reikės šaukštų suvalgyti visą sriubą?

// Vienas šaukštas pasemia nuo 7 iki 10 ml sriubos
/*$sriuba = rand(260, 300);
$saukstuKiekis = 0;
do {
    $saukstuKiekis++;
    // $sriuba -= min(rand(7, 10), $sriuba);
    $pasemta = rand(7, 10);
    // $sriuba -= $pasemta > $sriuba ? $sriuba : $pasemta;
    if ($pasemta > $sriuba) {
        $sriuba = $sriuba - $sriuba;
    }
    else {
        $sriuba = $sriuba - $pasemta;
    }

} while ($sriuba > 0);
echo $saukstuKiekis, $sriuba;*/


$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value . '<br>';
}
