<?php
//                                             http://localhost:8080/lapinas/15/index.php
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

// SELECT column_name(s)
// FROM table1
// INNER JOIN table2
// ON table1.column_name = table2.column_name

$sql = "SELECT `name`, surname, title, autors.id AS aid, books.id AS bid
FROM autors
INNER JOIN books
ON autors.id = books.author_id
ORDER BY `name` 
";

$stmt = $pdo->query($sql); // steitmento objektas
echo '<ul>';
while ($row = $stmt->fetch())
{
    echo '<li><b>ID:'.$row['aid'].'</b> '.$row['name'].' '.$row['surname']. ' <b>BookID:'.$row['bid'].'</b> '.$row['title']. '</li>';
}
echo '</ul>';

// SELECT column_name(s)
// FROM table1
// LEFT JOIN table2
// ON table1.column_name = table2.column_name;

$sql = "SELECT `name`, surname, title, autors.id AS aid, books.id AS bid , author_id
FROM autors
LEFT JOIN books
ON autors.id = books.author_id
order by 	autors.name	
";
$stmt = $pdo->query($sql);// steitmento objektas
echo'<ul>';
while ($row = $stmt->fetch())
{
    echo'<li><B> ID = '.$row['aid'].'</B> ; '.$row['author_id'].' ; <B>Books ID = '.$row['bid'].'</B> ; '.$row['title'].' ; '.$row['name'].' ; '.$row['surname'].' ; '.'</li>';
}
echo'</ul>';

// SELECT column_name(s)
// FROM table1
// RIGHT JOIN table2
// ON table1.column_name = table2.column_name;

$sql = "SELECT `name`, surname, title, autors.id AS aid, books.id AS bid , author_id
FROM autors
RIGHT JOIN books
ON autors.id = books.author_id
order by 	author_id
";
$stmt = $pdo->query($sql);// steitmento objektas
echo'<ul>';
while ($row = $stmt->fetch())
{
    echo'<li><B> ID = '.$row['aid'].'</B> ; '.$row['author_id'].' ; <B>Books ID = '.$row['bid'].'</B> ; '.$row['title'].' ; '.$row['name'].' ; '.$row['surname'].' ; '.'</li>';
}
echo'</ul>';




