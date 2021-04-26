<?php
//Esopo Global
$nome  =  "Gustavo Henrique";

function exibeNome(){
	//Escopo local na função:
	//acho $nome;
	//Porém se declararmos :
	global $nome;
	//Pegamos a variável nome que estava em escopo global para o nosso escobo local
	echo $nome;
}

exibeNome();
echo "<hr>";

/////////////////////////////////////////////////////////

function exibeCidade(){
	global $cidade;
	//Como não há nenhum laço de memória salvo como cidade no escopo global, definimos aqui uma nova variável no escopo global que pode ser usado fora dessa função
	$cidade = "São Jospe dos Campos";
}

exibeCidade();
echo $cidade;
echo "<hr>";

/////////////////////////////////////////////////////////

//No PHP há um array defino chamado $GLOBALS[], onde nele há armazenado todas as variáveis declaradas de escopo global, pode-se referir-se a elas usando seu nome como índice, como visto abaixo.

$a = 1;
$b = 2;
$c = 5;

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();