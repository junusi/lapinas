<?php
function init(){
    session_start();
    if (!isset($_SESSION['zoo'])){
        $_SESSION['zoo'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach ($_SESSION['zoo'] as $kitas) {
        if($kitas['id'] == $_GET['id']){
            //$givunas = $kitas;
            //break;
         return $kitas;   
        }  
      }
}


function store(){
    $givunas = [];
   $givunas['id'] = $_SESSION['id'];
   $givunas['gyvunai'] = $_POST['gyvunai'];
   $givunas['imia'] = $_POST['imia'];
   $givunas['amzius'] = $_POST['amzius'];
   $_SESSION['id']++;
   $_SESSION['zoo'][] = $givunas;
}

function destroy(){
    foreach ($_SESSION['zoo'] as $key => &$givunas) {
        if ($givunas['id'] == $_POST['id']) {
           unset($_SESSION['zoo'][$key]);
           return;
        }
    }
}
function update(){
    foreach ($_SESSION['zoo'] as  &$givunas) {
        if ($givunas['id'] ==$_POST['id']) {
            $givunas['gyvunai'] = $_POST['gyvunai'];
            $givunas['imia'] = $_POST['imia'];
            $givunas['amzius'] = $_POST['amzius'];
            return; 
        }
      }
    }
?>