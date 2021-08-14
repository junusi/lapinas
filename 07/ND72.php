<?php


function nr2($par1,$par2){
    ?>
    <
    <?php 
  echo'h'.$par2;
    ?>
     >
     <?php
  echo $par1;
    ?>
    <
    <?php
  echo'/h'.$par2.'>'.'<br>';
  echo'<br>';
  echo' h tago numeris yra : '.$par2.'<br>';
      return ;
     }
     nr2('Hello World', rand(1,10));
  echo'<br>';