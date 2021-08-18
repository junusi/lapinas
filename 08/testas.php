<?php
/* 1.Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. 
Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”.
 Likusiems nariams priskirkite reikšmę “B”.
 Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
 */
$masyvas = [];
foreach (range(0,100) as $key => $value) {
    if ($key % 10 === 0) {
       $masyvas[$key] = 'A';
    } else {
       $masyvas[$key] = 'B';
    }
    
 }

 echo'<pre>';
print_r($masyvas).'<br>';
/*
 2.Pakeiskite pirmąjame uždavinyje sukurtą masyvą. 
 Visas masyvo reikšmes (“A” ir “B”) pakeiskite masyvais, 
 kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10.
 Naujai sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B”
  stringais (pagal tai kokią raidę keičiate į masyvą).
  Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
*/
//*************************************************************************************************************************************
/*
03.Pakeiskite antrame uždavinyje sukurtą masyvą. Visus antro lygio masyvus pailginkite iki 10 elementų. 
Papildomai sukurtų elementų reikšmes užpildykite “C” stringais. 
Jeigu masyvo ilgis jau yra 10, tai tokio masyvo keisti nereikia. 
Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r(). 
Papildomai: Suskaičiuokite kiek gautame masyve yra “A”, “B” ir “C” reikšmių ir rezultatą atspausdinkite.
*/
int[] m = {7, 5, -8, 3, -1};
       
for (int i = 0; i < m.length - 1; i++) {
    for (int j = i + 1; j < m.length; j++) {
        if (m[i] > m[j]) {
            int tmp = m[i];
            m[i] = m[j];
            m[j] = tmp;
        }
    }
}
for (int i = 0; i < m.length; i++) {
    System.out.println(m[i]);
}
System.out.println("-----------");
for (int i = 0; i < m.length - 1; i++) {
    for (int j = i + 1; j < m.length; j++) {
        if (m[i] < m[j]) {
            int tmp = m[i];
            m[i] = m[j];
            m[j] = tmp;
        }
    }
}
for (int i = 0; i < m.length; i++) {
    System.out.println(m[i]);
}