<?php
/*
 8.Patobulinti 2 uždavinio piniginę taip, 
 kad būtų galima skaičiuoti kiek piniginėje 
 yra monetų ir kiek banknotų. Parašyti metodą monetos(), 
 kuris skaičiuotų kiek yra piniginėje monetų ir 
 metoda banknotai() - popierinių pinigų skaičiavim
*/
class Pinigine{

    private $popieriniaiPinigai ;
    private $metaliniaiPinigai; 
public function monetos()
   { for ($i=0; $i < 5; $i++) {
        $kiekis = rand(1,5);  
   if ($kiekis <= 2) {
       $sumMetaliniaiPinigai += $kiekis;
   } 
    }
   }

   public function banknotai()
   {for ($i=0; $i < 5; $i++) {
    $kiekis = rand(1,5);  
if ($kiekis <= 2) {
   $sumMetaliniaiPinigai += $kiekis;
} 
}

   }

}






