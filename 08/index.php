<?php
?>
<a href="http://localhost/lape/08/nd1.php?color=1">front</a>
<a href="http://localhost/lape/08/nd1.php">pack</a>
<?php  if(1 == ($_GET['color'] ?? '')): ?> 
<body style='background-color: red;'></body>
<?php else:  ?>
<body style='background-color: black;'></body>
<?php endif ?>

//*************************************************************************
<?php
$spalva = 'black';
if (isset($_GET['color'])) {
    $spalva= 'red';
}
?>
<head>
    <title>Black</title>
</head>
<body style="background-color: <?=$spalva?>; ">
    <h1 style="color: yellow">
        <a href="./nd9.php">BLACK</a>\
        <br>
        <a href="./nd9.php?color=1?">RED</a>
    </h1>
</body>
<?php