<?php

include('./functions.php');
//     init(); sukuria sessija
init();
//    surandom konkretu gyvuna function edit();

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $givunas = edit();
}
//      sukuriam nauja gyvuna  function store();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['id'])) {
    function store(){
     store();
   header("location:./index.php");
   die;
}
}
//      migtukas DELETE logika,function destroy();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['gyvunai'])){
    destroy();
    header("location:./index.php");
    die;  
}
//      migtuko ATNAUJINTI GYVUNA logika, function update();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    update();
    header("location:./index.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form class="form" action="" method="POST">

<div class="form-group row">
        <label  class="col-sm-2 col-form-label">GYVUNO RUSIS</label>
    <div class="col-sm-4">
        <input  class="form-control " type="text" name="gyvunai" value="<?= (isset($givunas))?$givunas['gyvunai'] : "" ?>">
    </div> 
</div>
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">GYVUNO VARDAS</label>
        <div class="col-sm-4">
        <input  class="form-control " type="text" name="imia" value="<?= (isset($givunas))?$givunas['imia'] : "" ?>">
    </div>
</div>  
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">GYVUNO AMZIUS</label>
        <div class="col-sm-4">
        <input  class="form-control " type="text" name="amzius" value="<?= (isset($givunas))?$givunas['amzius'] : "" ?>">
    </div>
</div>
<!-- migtukas ATNAUJINTI GYVUNA    -->
<?php if (!isset($givunas)) {
  echo '<button type="submit" class="btn btn-primary">PRIDETI GYVUNA</button>';
}else{
    echo  '<input type="hidden" name="id" value="'.$givunas['id'].' ">'.
    '<button type="submit" class="btn btn-primary">ATNAUJINTI GYVUNA</button>';
} ?>
  
</form>
<table class="table">
<tr>
     <th>Id</th>   
     <th>RUSIS</th>
     <th>VARDAS</th>
     <th>AMZIUS</th>
     <th>EDIT</th>
     <th>DELIT</th>
</tr>
<?php foreach ($_SESSION['zoo'] as $givunas) { ?>
<tr>
    <td> <?= $givunas['id'] ?> </td>   
    <td> <?= $givunas['gyvunai'] ?> </td>
    <td> <?= $givunas['imia'] ?>   </td>
    <td> <?= $givunas['amzius'] ?> </td>
    <td> <a class="btn btn-success" href="?id=<?= $givunas['id'] ?>">EDIT</a></td>
    <!-- migtukas DELETE     -->
    <td>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $givunas['id'] ?>">
           <button class="btn btn-danger" type="submit">DELETE</button> 
        </form>
    </td>
<!--******************************************************************************-->

</tr>
<?php } ?>
</table>
</body>
</html>
