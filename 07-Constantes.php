<?php

// Constantes 

define("NOME", "Joé Carlos");
define("IDADE", 22);
define("ALTURA", 1.85);

echo 'Meu nome é ' .NOME. ', de idade igual a ' .IDADE. ', e altura igual a ' .ALTURA;

define("TIMES", ['vasco', 'são paulo', 'curintia']);

echo "<hr>";
echo 'meu time é ' .TIMES[1];