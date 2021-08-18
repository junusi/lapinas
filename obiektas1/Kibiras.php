<?php
//  object(kibiras)#1 (1) { ["akmenuKiekis":protected]=> int(7) }  
/*
 1.Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. 
 Parašyti šiai savybei metodus prideti1Akmeni() 
 pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). 
 Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą 
 į kibirą ir rezultatų išvedimą
*/

class Kibiras{
    protected $akmenuKiekis ;
  public function pridetiAkmeni()
{
$this->akmenuKiekis++;
}
public function pridetiDaugAkmenu($kiekis)
{  
    $this->akmenuKiekis += $kiekis;
}
public function kiekPririnktaAkmenu()
{
  return  $this->akmenuKiekis; 
}
}