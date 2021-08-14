<?php

// funkcija kuria tikrina ar failas egzistoja 
//ir ijegu ne tai ij sukuria
// darom pradine tuscia failo struktura
// struktura dedam i faila,masiva paverciam json stringu
//stringa irasom i faila ir sakom koks failas ir ka ten gules: $bebrai
// returninam get o ne put,pres tai atverciam ij is strihgo i 
// objekta o po to i masiva decodinam tam darosam   ,1)
function getBebrai():array
{
if(!file_exists(__DIR__.'/bebraj.json')){
     $bebrai = ['juodi' => 0,'rudi' => 0,];
     $bebrai = json_encode($bebrai);
     file_put_contents(__DIR__.'/bebraj.json',$bebrai);
 }
 return json_decode(file_get_contents(__DIR__.'/bebraj.json'),1);
}

// masyva setinam
function setBebrai(array $bebrai):void
{
    $bebrai = json_encode($bebrai);
    file_put_contents(__DIR__.'/bebraj.json',$bebrai);
}























?>