<?php
//String definieren
$word = "HelloWorld";
//Array maken van elke character in de string
$arr = str_split($word);
//String length van wordlength in een functie
$wordlength = strlen($word);

//Forloop: i is index getal.
//Voor elke letter word in de lengte van de String krijgt i een +1.
// ord() maakt van de letter in de array een getal op basis van de ascii waarde

//Als het ascii getal even is (het modulo gelijk is aan 0),
//dan word de som van de ascii waarde en het index getal gereturnt.
//Anders word het verschil van de ascii waarde en het index getal gereturned.
for( $i = 0; $i < $wordlength; $i++ ){
    if( (ord($arr[$i]) % 2 == 0)){
        echo chr((ord($arr[$i]) + $i));
    } else{
        echo chr((ord($arr[$i]) - $i));
    }

}
?>