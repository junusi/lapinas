<?php

//                                                                  STRINGAI

/*
1.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
*/
$vardas1 = 'Ivanas Krinickis';
$vardas2 = ' Ali Krinickis';
if ($vardas1 < $vardas2) {
   echo $vardas1;
  
} else {
   echo $vardas2;
}

echo'<br>';
/*
2.Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/
$vardas = 'Al';
$pavarde = 'Pacino';
echo mb_strtoupper($vardas);
echo'<br>';
echo mb_strtolower($pavarde);
echo'<br>';
/*
3.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
$vardas = 'Andriano';
$pavarde = 'Pacino';
$trecias = $vardas.$pavarde ;
echo $trecias.'<br>';
/*
4.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
 Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
$vardas = 'Al';
$pavarde = 'Pacino';

/*
5.Sukurti kintamąjį su stringu: “An American in Paris”.
 Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. 
 Rezultatą atspausdinti.
*/
$masyvas = ['A','n',' ','A','m','e','r','i','c','a','n',' ','i','n',' ','P','a','r','i','s'];
function zamena($parametras){
for ($i=0; $i < count($parametras); $i++) { 
   if ($parametras[$i] == 'A' || $parametras[$i] == 'a' ) {
      $parametras[$i] = '*' ;
   }  
}
for ($i=0; $i < count($parametras); $i++) { 
   echo$parametras[$i];
}
echo'<br>';
return;
}
zamena($masyvas);

/*
6.Sukurti kintamąjį su stringu: “An American in Paris”.
 Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
 Rezultatą atspausdinti.
*/
$masyvas = ['A','n',' ','A','m','e','r','i','c','a','n',' ','i','n',' ','P','a','r','i','s'];
function zamena1($parametras){
   $sum = 0;
for ($i=0; $i < count($parametras); $i++) { 
   if ($parametras[$i] == 'A' || $parametras[$i] == 'a' ) {
      $sum++ ;
   }  
}
echo$sum.'<br>';
return $sum;
}
zamena1($masyvas);


/*
7.Sukurti kintamąjį su stringu: “An American in Paris”.
 Jame ištrinti visas balses. Rezultatą atspausdinti.
  Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
 “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/


/*
8.Stringe, kurį generuoja toks kodas:
'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
 Surasti ir atspausdinti epizodo numerį.
*/


/*
9.Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės.
 Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/




/*
10.Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/


/*
11.Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių,
 o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų.
 Žodžiai neturi kartotis. (reikės masyvo)
*/