<?php
/*
 3.Sukurti klasę Stikline. 
 Sukurti privačią savybę turis ir kiekis. 
 Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. 
 Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis 
 netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), 
 kuris grąžiną kiekį. Pilant išpilamas visas kiekis, 
 tas kas netelpa, nuteka per stalo viršų. 
 Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. 
 Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, 
 o mažesnę į dar mažesnę.
*/
class Stikline{

private $turys;
private $kiekis = 0;


public function __construct($turys)
{
    $this->turys = $turys;
}

public function ipilti($kiekis)
{
    if ($this->turys < $kiekis) {
      
       return $this->kiekis = $this->turys;
    }
    return $this->kiekis += $kiekis;
}

   public function ispilti()
{

  
    return $this->kiekis;
}

}
    










