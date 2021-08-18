<?php
/*
 11. papildomas
Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais,
kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”.
Šone yra rodomas žaidėjų rezultatas.
Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas 
“mesti kauliuką”. Jį nuspaudus skriptas automatiškai 
sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato,
 o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu 
 (parodo kieno eilė “mesti kauliuką”).
Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų.
Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus
 ir pradėti žaidimą iš naujo.
*/

session_start();
// session_unset();
$round = 0;
$p1result = 0;
$p2result = 0;

//Vardu issaugojimas
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['player1'])){
    // Nustato varda jeigu neužrašo nieko
    if($_POST['firstplayer'] == ""){
        $_POST['firstplayer'] = "Pirmas žaidėjas";
    }
    if($_POST['secondplayer'] == ""){
        $_POST['secondplayer'] = "Antras žaidėjas";
    }
    //Išsaugo kintamuosius iš post masyvo paspaudus pradėti
    $_SESSION['player1'] = $_POST['firstplayer'];
    $_SESSION['player2'] = $_POST['secondplayer'];
    $_SESSION['result1'] = $p1result;
    $_SESSION['result2'] = $p2result;
    $_SESSION['round'] = $round;
    //Peradresuoja i ta pačia svetaine
    header('Location:http://localhost/Projektas/Webas/vienuolikta.php');
    die;
}
//Kintamuju priskyrimas
if (isset($_SESSION['player1'])){
    $player1 = $_SESSION['player1'];
    $player2 = $_SESSION['player2'];
    $p1result = $_SESSION['result1'];
    $p2result = $_SESSION['result2'];
    $round = $_SESSION['round'];
}

// echo "GETAS:<br>";
// print_r($_GET);
// echo "<br>POSTAS:<br>";
// print_r($_POST);
// echo "<br>SESIJA:<br>";
// print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žaidimas</title>
</head>
<body>
<?php if ( !isset($_SESSION['player1'])) : ?>
    <form action="" method = "POST">
    1 Žaidėjas: <input type="text" name="firstplayer"><br>
    2 Žaidėjas: <input type="text" name="secondplayer"><br>
    <button type="submit">Pradėti</button>
    </form>
    <?php
  
    if(isset($_SESSION['win'])){
        echo $_SESSION['win'];
    }
    ?>
<?php endif ?>

<?php if ( isset($_SESSION['player1'])) : ?>

    <?php if ( $round % 2 == 0) : ?>
        <br><?= $player1.", rezultatas: ".$_SESSION['result1']?>
        <form action="" method = "POST">
        <br><button type="submit" >Mesti kauliuką</button>
        <?php
        $_SESSION['result1'] += rand(1,6);
        $_SESSION['round']++;
        
        if($_SESSION['result1'] > 30){
            session_unset();
            $_SESSION['win'] = $player1." laimėjo!";
            header('Location:http://localhost/Projektas/Webas/vienuolikta.php');
            die;
        } 
        ?>
        <?php else: ?>
        <br><?= $player2.", rezultatas: ".$_SESSION['result2']?>
        <form action="" method = "POST">
        <br><button type="submit">Mesti kauliuką</button>
        <?php 
        $_SESSION['result2'] += rand(1,6);
        $_SESSION['round']++;
        if($_SESSION['result2'] > 30){
            session_unset();
            $_SESSION['win'] = $player2." laimėjo!";
            header('Location:http://localhost/Projektas/Webas/vienuolikta.php');
            die;
        }
        ?>
        </form>
    <?php endif ?>
<?php endif ?>
</body>
</htm