<?php

class Fabricante{
	private $nome;

	public function __construct($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
}

class Produto{
	private $descricao;
	private $preco;
	private $fabricante;

	public function __construct($descricao, $preco, Fabricante $fabricante){
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->fabricante = $fabricante;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function setPreco($preco){
		$this->preco = $preco;	
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function getDetalhes(){
		return "O produto é um $this->descricao, e seu preço é $this->preco. Fabricante: {$this->fabricante->getNome()}";
	}
}

//-----------------------------------------------------------------------------------------------------------------------
$fab_p1 = new Fabricante("Fabricante A");
$p1 = new Produto("livro", 60, $fab_p1);

echo $p1->getDetalhes();