<?php
/*
 5.Sukurkite du atskirus puslapius blue.php ir red.php. 
 Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
 Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
 o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą 
 puslapį (iš raudono į mėlyną ir atvirkščiai).
*/
if (isset($_GET['go'])) {
    header("location:./blue.php");
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
<body style="background-color:red;">
   <a href="./red.php?go=1">Linkas</a> 
</body>
</html>