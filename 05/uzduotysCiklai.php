<?php
//                                                                   CIKLAI

/*
1.Naršyklėje nupieškite linija iš 400 “*”. 
    a.)  Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
    b.) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/

echo'Uzduotis Nr 1.'.'<br>';
$c = 0;
for ($i=1; $i <= 400 ; $i++) { 
    echo'*';
 $c++;
 if ($c == 50) {
    echo'<br>';
    $c = 0;
 }

}


/*
2.Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300,
 atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/

echo'Uzduotis Nr 2.'.'<br>';
$skaiciuDidesniu150 = 0;
$Color = "red";
echo'<br>';
for ($i=1; $i <= 300 ; $i++) { 
    $skaicius = rand(0,300);
  
  if ( $skaicius > 150 && $skaicius < 275) {
    $skaiciuDidesniu150++;
    echo'$skaicius Nr '.$i.'= '.$skaicius.'<br>';
  } else {if ($skaicius > 275) {
    echo'<div style="Color:'.$Color.'">'.'$skaicius Nr '.$i.'= '.''.$skaicius.'</div>'; 
    $skaiciuDidesniu150++;
  }else{
    echo'$skaicius Nr '.$i.'= '.$skaicius.'<br>';
  }   
  }
}

echo '$skaiciuDidesniu150 = '.$skaiciuDidesniu150;
echo'<br>';
/*
3.Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476),
 kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
*/
echo'<br>';
echo'Uzduotis Nr 3.'.'<br>';
 $atsitiktinisSkaičius = rand(3000,4000);
  $j = 0;
  $f = 0;
  $t = ' . ';
  $k = ' , ';
  for ($i = 1; $i <= $atsitiktinisSkaičius ; $i++) {
      $j = $i % 77; 
      if ($j == 0) {
        $f++;
      } 
  }
  echo'<br>';
  for ($i = 1; $i <= $atsitiktinisSkaičius ; $i++) {
     $j = $i % 77; 
    if ($j == 0 && $f > 1) {
     echo $i.$k;
     $f--;
    }else{if($j == 0 && $f > 0){
       echo $i.$t;
         $f--;
       echo'<br>';
    }
  }  
}

/*
4.Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
*/
/*
echo'Uzduotis Nr 4.'.'<br>';
$c = 0;
for ($i=1; $i <= 10000 ; $i++) { 
    echo' * ';
 $c++;
 if ($c == 100) {
    echo'<br>';
    $c = 0;
 }

}
*/


/*
5.Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
*/
echo'Uzduotis Nr 5.'.'<br>';





/*
6.Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius.
 Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
 Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
    a.) Iškritus herbui;
    b.) Tris kartus iškritus herbui;
    c.) Tris kartus iš eilės iškritus herbui;
*/

echo'Uzduotis Nr 6.'.'<br>';
echo'<br>';
$metimas = rand(0,1);
echo ' 1.Variantas a.';
echo'<br>';
do {
  $metimas  = rand(0, 1);
  if ($metimas > 0) {echo $sk = 'iskrito: Skaicius'. '<br>';} else { echo $her = 'iskrito: Herbas'. '<br>';}
echo $metimas . '<br>';
} while ($metimas === 1 );
echo'<br>';
echo ' 2.Variantas b.';
echo'<br>';
$sum = 0;
do {
  $metimas  = rand(0, 1);
  if ($metimas > 0) {echo $sk = 'iskrito: Skaicius'. '<br>';} else { echo $her = 'iskrito: Herbas'. '<br>';}
  if ($metimas === 0) {
   $sum++;
  }
  echo $metimas .'<br>';
} while (3 > $sum  );
echo'Herbas iskrito : '.$sum.' kartus';
echo'<br>';
echo ' 3.Variantas c.';
echo'<br>';

$her1 = 0;
 while (3 > $her1) {
  $metimas  = rand(0, 1);
  echo $metimas .'<br>';
  if ($metimas === 0) {
    $her1++;
   }else{
    $her1 = 0;
   }
 }
echo'Herbas iskrito : '.$her1.' kartus iš eilės'.'<br>';
echo'<br>';
/*
7.Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25.
 Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”.
  Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
  Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
*/
echo'Uzduotis Nr 7.'.'<br>';
$petrasSum = 0;
$kazysSum = 0;

while(222 > $petrasSum & 222 > $kazysSum ){
$petras = rand(10,20);
$kazys = rand(5,25);
$petrasSum = $petrasSum + $petras ;
$kazysSum = $kazysSum + $kazys;
echo'Petras surinko: '.$petrasSum.' <>';
echo'Kazys surinko: '.$kazysSum.'<br>';
}
if ($petrasSum > $kazysSum) {
  $laimetojas = 'Petras';
} else {
  $laimetojas = 'Kazys';
}
echo'<br>';
echo'*******************************************************'.'<br>';
echo'* '.'Partiją laimėjo: '.$laimetojas.' * '.'Petras surinko: '.$petrasSum.' * '.'Kazys surinko: '.$kazysSum.'*'.'<br>';
echo'*******************************************************'.'<br>';
/*
8.Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas),
 kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
*/
echo'Uzduotis Nr 8.'.'<br>';
/*

10.Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
          a.) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
          b.) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti),
 kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/

echo'Uzduotis Nr 10.'.'<br>';
$viniesIlgis = 85 ;
$viniuKiekis = 5;
$mazasSmugis = rand(5,20);
$didelisSmugis = rand(20,30);
$tikslumas = rand(0,1);
$smugiuKiekis = 0;
/*
echo'Variantas a.) '.'<br>';
do  {
  if ( $viniesIlgis > 0) {
    $mazasSmugis = rand(5,20);
    echo'smugiuoIkalimas = '.$mazasSmugis.' ; ';
    $smugiuKiekis++;
    $viniesIlgis -= $mazasSmugis;
    echo'Liko ikalti = '.$viniesIlgis.' ; ';
  }else{
    $viniuKiekis --;
    $viniesIlgis = 85 ;
    echo'viniuKiekis = '.$viniuKiekis.'<br>'; 
  }
}while ($viniuKiekis > 0) ;
echo'smūgių kiekis = '. $smugiuKiekis.'<br>';
*/
echo'Variantas b.) '.'<br>';
while ($viniuKiekis > 0) {
while( $viniesIlgis > 0) {
    $didelisSmugis = rand(20,30);
    $tikslumas = rand(0,1);
    if ($tikslumas === 1) {
    $smugiuKiekis++;
    $viniesIlgis -= $didelisSmugis;
    echo'PATAIKE'.' ; ';
    echo'smugiuoIkalimas = '.$didelisSmugis.' ; ';
    echo'Liko ikalti = '.$viniesIlgis.' ; ';
    } else {
      $smugiuKiekis++;
      echo'NEPATAIKE'.' ; ';
      echo'Liko ikalti = '.$viniesIlgis.' ; ';
    }
  }
    $viniuKiekis --;
    $viniesIlgis = 85 ;
    echo'viniuKiekis = '.$viniuKiekis.'<br>'; 
  
}
echo'smūgių kiekis = '. $smugiuKiekis.'<br>';
/*
11.Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs).
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
*/