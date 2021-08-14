<?php


if (isset($_GET['NAME'])) {
   $name = $_GET['NAME'].' ';
}else{
    $name = '';
}

if (isset($_GET['SURNAME'])) {
    $surname = $_GET['SURNAME'].' ';
 }else{
     $surname = '';
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
<body>
  <!--  <h><?=$_GET['NAME'].' '.$_GET['SURNAME'] ;  ?></h>-->
 <!-- <h1><?=(isset($_GET['NAME'])) ? $_GET['NAME'] : ""; ?></h1>-->
  <h1><?= $name.''.$surname ?></h1>
    <form action="" method="get">
        <input type="text" name="NAME">
        <input type="text" name="SURNAME">
        <button type="submit">press me </button>
    </form>
</body>
</html>