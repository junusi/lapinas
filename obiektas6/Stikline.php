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
// destytojo sprendimas
class Stikline {

    private $turis, $kiekis = 0;

    public function __construct($turis) 
    {
        $this->turis = $turis;
    }


    public function ipilti($kiekis)
    {
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;
    }

    public function ispilti()
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }

}

// Mano sprendimas  
class Stikline
{
private $turis;
private $kiekis;
public function __construct($turis)
{
    $this->turis = $turis; 
}
public function ipilti($kiekis)
{
if(($this->kiekis + $kiekis) > $this->turis ){
    $this->kiekis = $this->turis;
    return $this->kiekis;
}else{
    $this->kiekis =+ $kiekis;
    return $this->kiekis;
}

}
public function ispilti()
{ 
    $this->kiekis -= $this->kiekis;
    return $this->kiekis;
}


}








