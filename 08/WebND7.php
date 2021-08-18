<?php
/*
 7.Pakartokite 6 uždavinį. Papildykite jį kodu, 
 kuris naršyklę po POST metodo peradresuotų 
 tuo pačiu adresu (t.y. į patį save) jau GET metodu.
*/
$spalva = 'green';
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SERVER['REQUEST_METHOD'] = "GET";
    header("location:./WebND7.php");
    die;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $spalva  ?>">
    <form action="" method="get">
<button type="submit">GET</button>
    </form>
    <form action="" method="post">
<button type="submit">POST</button>
    </form>
</body>
</html>




