<?php

$calculator = readline ("welke uitvoering wil je? (+,-)");
$antwoord1 = readline ("wat is je eerste cijfer?");
$antwoord2 = readline ("wat is je tweede cijfer?");

if ($calculator == "+") {
	echo ($antwoord1 + $antwoord2) .PHP_EOL;
}


if ($calculator == "-") {
	echo ($antwoord1 - $antwoord2);
}



