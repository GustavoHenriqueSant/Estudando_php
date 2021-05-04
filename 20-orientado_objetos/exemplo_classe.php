<?php

class Produto{
	private $descricao;
	private $preco;

	public function __construct($descricao, $preco){
		$this->descricao = $descricao;
		$this->preco = $preco;
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
		return "O produto é um $this->descricao, e seu preço é $this->preco.";
	}
}

$p1 = new Produto("livro", 60);

echo $p1->getDetalhes();