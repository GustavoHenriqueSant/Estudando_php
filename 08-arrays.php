<?php
//ARRAYS

$carros = array('hilux', 'astra', 'onix', 'uno');
//para printar um array usa-se o seginte método:
print_r($carros);
//adição:
$carros[] = 'amarock';
echo "<br> <hr>";
print_r($carros);
// adição especificando o índice:
$carros[2] = 'camaro';
echo "<br> <hr>";
print_r($carros);

////////////////////////////////////////////

//count para contr quantos elementos um array possui
echo count($carros);

//foreach para percorrer um array:
foreach ($carros as $car) {
	echo $car . "<br>";
}

echo "<br> <hr>";
/////////////////////////////////////////

//Podemos ter arrays numéticos que são como os mostrados até então, que possuem index numéricos. E também podemos ter arrays associativos, como os que mostrarei agora:

$pessoas = array("nome" => "Gustavim", "idade" => 20, "altura" => 1.74);
echo $pessoas['altura'] . "<br>";

$pessoas['cidade'] = 'Itabuna';
foreach ($pessoas as $index => $value) {
	echo $index.": ".$value."<br>";
}

/////////////////////////////////////////

//Podemos tbm ter arrays multidimensionais

$times  = array("Cariocas" => array("campeao" => 'vasco', "vice" => 'flamengo', "terceiro" => 'bota fogo'),
				"Paulistas" => array('santos', 'sao Puaolo', 'palmeiras'));

echo $times['Cariocas']["campeao"];
echo "<br>";

foreach ($times['Cariocas'] as $index => $value) {
	echo $index.": ".$value."<br>";
}