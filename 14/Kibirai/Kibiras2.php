<?php
use Ramsey\Uuid\Uuid;
/*
(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir 
pavadinkite Kibiras2. Patobulinkite pridėdami statinę 
privačią savybę akmenuKiekisVisuoseKibiruose. 
Ši savybė turi rodyti kiek akmenų surinkta visuose 
Kibiras2 objektuose. Sukurkite geterį objekte, 
ir statinį geterį klasėje, kuris išvestų 
akmenuKiekisVisuoseKibiruose reikšmę. 
Sukurkite tris kibirus ir pademonstruokite veikimą.
*/

class Kibiras2{
protected $akmenuKiekis =0;

private function __construct(){}
private function __clone(){}
//private function __sleep(){}
//private function __wakeup(){}

protected static $akmenuKiekisVisuoseKibiruose = 0;
private static $Kibiras;
public static function getKibiras2()
{
return self::$Kibiras ?? self::$Kibiras = new self;

}

public function pridetiAkmeni()
{
    self::$akmenuKiekisVisuoseKibiruose++;   
    $this->akmenuKiekis++;

} 
public function pridetiDaugAkmeni($kiekis)
{
    self::$akmenuKiekisVisuoseKibiruose += $kiekis;    
    $this->akmenuKiekis += $kiekis;

}
public function kiekPririnktaAkmenu()
{
 echo $this->akmenuKiekis.' ;';
echo self::$akmenuKiekisVisuoseKibiruose.'<br>';
}

public function __invoke($x)
{

$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);

return ;
}







}























