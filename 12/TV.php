<?php


class TV 
{
    public static $programs = [1 => 'LRT', 2 => 'TV7', 3 => 'TV Polonia'];
    private $nowWatching;

    

    
    public $owner; // ==> $this->owner
    public $chanel;
    private $in; // planuojam gal 42 o gal 55 o gal dar kazka
    
   

    public function ijungti($bilekas) 
    {
        echo('TV Įjungtas').'<br>';
    }

    public function __construct($in)
    {
        $this->in = $in;
    }


    public function sellTo($name)
    {
        // $owner;
        $this->owner = $name;
        // $la55;
        // $bla55;
    }

    public function switchCanel($number)
    {
        $this->chanel = $number;
        $this->nowWatching = TV::$programs[$number];
    }

    public function kaTu(){}
}