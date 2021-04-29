<?php
// While e Do While

$contador = 0;
while($contador <= 10){
	echo $contador."<br>";
	$contador++;
}

echo "<hr>";

$contador = 0;
do{
	echo "contador é $contador.<br>";
	$contador++;
} while($contador <= 10);

echo "<hr>";

//-----------------------------------------------------------------------------------------------------------------------]
//FOR E FOREACH:

for($contador = 0; $contador <= 10; $contador++){
	echo $contador."<br>";
}

echo "<hr>";

$cores = array('azul', 'verde', 'amarelo', 'vermelho');

foreach($cores as $cor){
	echo "Sua cor é $cor.<br>";
}


