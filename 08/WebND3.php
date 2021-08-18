<?php
/*
 3.Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.
*/
$spalva = 'green';
if (isset($_GET['color'])) {
    $spalva = $_GET['color'];
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
<body style="background-color:<?= $spalva ?>;">
    <form action="" method="get">
     <input type="text" name="color" id=""> 
     <button type="submit">PRESS</button> 
    </form>
</body>
</html>















