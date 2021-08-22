<?php
/*
 8.Patobulinti 2 uždavinio piniginę taip, 
 kad būtų galima skaičiuoti kiek piniginėje 
 yra monetų ir kiek banknotų. Parašyti metodą monetos(), 
 kuris skaičiuotų kiek yra piniginėje monetų ir 
 metoda banknotai() - popierinių pinigų skaičiavimui.
*/
class Pinigine{

    private $popieriniaiPinigai ;
    private $metaliniaiPinigai; 
private $monetu;
private $banknotu;
    public function ideti($kiekis)
    {  
       if ($kiekis <= 2) {
        $this->metaliniaiPinigai += $kiekis;
        $this->monetu++;
       } else {
        $this->popieriniaiPinigai += $kiekis;
        $this->banknotu++;  
       }  
    }
public function monetos()
  {
      echo 'piniginėje monetų  yra '.$this->monetu.'<br>';
   }

   public function banknotai()
  
{ 
   echo 'piniginėje banknotu  yra '. $this->banknotu.'<br>';

}
   
}






