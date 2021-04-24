<?php

//----------- ESCALARES //-----------
//string
$texto = "Olá mundo!";
var_dump($texto);
echo "<hr>";

//---------- Booleano //-----------
$no = false;
$yes = true;
var_dump($yes);
echo "<hr>";

//----------- COMPOSTOS //-----------
$carros = array("gol", "astra", "palio", "camaro", 20, true);
var_dump($carros);
echo "<hr>";

//---------- Objetos //------------
class Cliente{
	public $nome;

	public function set_name($nome) {
		$this->$nome = $nome;
	} 
}

$cliente = new Cliente();
var_dump($cliente);
$cliente->set_name("Guga");
var_dump($cliente);

//----------------------------------
// Há mais dois, os especiais que são com valores NULL, e resource para fazer conexões, mas ainda n tive contato.