<?php


class Bebras
{

            private $color ='blue'  ;
 private $age = 54;


/*
public function getColor()
{
return $this->color;
}
public function __set($prop,$value)
{
    if('black'== $value && $prop == 'color'){
        return ;
    }
    return $this->$value;

}*/

public function __get($prop)
{
echo $prop.' ';
if(in_array($prop,['age'])){
    return ;
}
return $this->$prop;
}

/*
public function setColor($color)
{
if('black' == $color){
    return;
}
$this->color = $color;
}*/

}




