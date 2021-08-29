<?php
//   http://localhost:8080/lapinas/21/index.php
$host = '127.0.0.1';
$db   = 'labas';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);//   PDO objectas
// Trynimas
// DELETE FROM table_name
// WHERE some_column = some_value
$sql = "DELETE FROM medziai
WHERE `name` = 'Palme' ||`type` = 2 || height = 10 || height < 10
";
$pdo->query($sql);

// Rasymas
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)
$height = rand(1,50);
$type = rand(1,3);
$name = '';
if ($type == 1) {
    $name =  'Obelys';
}else{if ($type == 2) {
    $name =  'Egle';
} else {
    $name =  'Palme';
}
}
$sql ="INSERT INTO medziai
(`name`,height,`type` )
VALUES('$name',$height,$type )
";
$pdo->query($sql);


//   Redagavimas

// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 
$sql = "UPDATE medziai
SET height = 10
WHERE height > 10
";
$pdo->query($sql);

//      SELECT column_name(s) FROM table_name
//        skaitymas is duomenu bazes
$sql = "SELECT id,`name`,height,`type` 
FROM medziai
";
$stmt = $pdo->query($sql);// steitmento objektas
echo'<ul>';
while ($row = $stmt->fetch())
{
    echo'<li> ID = ' .$row['id'].' ; '.$row['name'].' ; '.$row['height'].' metrai ; '.['Lapuotis','Spygliuotis','Palme'][$row['type'] - 1].'</li>';
}
echo'</ul>';














