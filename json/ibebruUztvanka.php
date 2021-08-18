<?php

//                           lapinas/json/index.php
// iskeliam funkcijas i atskira faila
// include_once __DIR__.'/functijon.php';// sita komanda turi buti visada virsuja
require_once __DIR__.'/functijon.php';
// DIR cia ne URL visiskai skirtingi dalikai skirtas serveriui
//  dedam naujos duomenis

$bebrai = getBebrai();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bebrai = getBebrai();
   if ('prideti-juodus' == $_POST['ka_daryt']) {
    $bebrai['juodi'] += (int)$_POST['j_plus'];
   }
   elseif ('atimti-juodus' == $_POST['ka_daryt']) {
    $bebrai['juodi'] -= (int)$_POST['j_minus'];
   }
   elseif ('prideti-rudus' == $_POST['ka_daryt']) {
    $bebrai['rudi'] += (int)$_POST['r_plus'];
   }
   elseif ('atimti-rudus' == $_POST['ka_daryt']) {
    $bebrai['rudi'] -= (int)$_POST['r_minus'];
   }
   setBebrai($bebrai);// irasom duomenis atgal i masyva
   header("location:http://localhost:8080/lapinas/json/index.php");
   die;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') :
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEBRU UZTVANKA</title>
<style>
div,h2{
    margin:15px;
    padding:7px;
    border:1px solid #ccc;
}
label{
    display:inline-block;
    width:140px;
}
</style>
</head>
<body>
    <h2>Juodeij:<?= $bebrai['juodi'] ?></h2>
    <h2>Rudeij:<?= $bebrai['rudi'] ?></h2>
    <form action="http://localhost:8080/lapinas/json/index.php" method="post">
 <div>
     <label>Prideti juodus</label>
     <input type="text" name="j_plus" >
     <button type="submit" name="ka_daryt" value="prideti-juodus">+</button>
 </div>
 <div>
     <label>Atimti juodus</label>
     <input type="text" name="j_minus" >
     <button type="submit" name="ka_daryt" value="atimti-juodus">-</button>
    </div>
 <div>
     <label>Prideti rudus</label>
     <input type="text" name="r_plus" >
     <button type="submit" name="ka_daryt" value="prideti-rudus">+</button>
 </div>
 <div>
     <label>Atimti rudus</label>
     <input type="text" name="r_minus" >
     <button type="submit" name="ka_daryt" value="atimti-rudus">-</button>
 </div>

    </form>
</body>
</html>
<?php endif;

































