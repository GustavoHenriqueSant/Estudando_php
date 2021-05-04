<?php
abstract class Conta{
	protected $agencia;
	protected $conta;
	protected $saldo;

	public function __construct($agencia, $conta, $saldo){
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo;
	}

	public function getDetalhes(){
		return "Agencia: {$this->agencia} | conta: {$this->conta} | saldo: {$this->saldo}<br>";
	}

	public function depositar($valor){
		$this->saldo += $valor;
	}
}

 final class Poupanca extends Conta{

	public function saque($valor){
		if($this->saldo - $valor < 0){
			echo "Saldo insuficiente. <br>";
		} else {
			$this->saldo -= $valor;
			echo "Saque feito com sucesso. Seu saldo atual é: $this->saldo.<br>";
		}
	}
}

final class Corrente extends Conta{
	protected $limite;

	public function __construct($agencia, $conta, $saldo, $limite){
		parent::__construct($agencia, $conta, $saldo);
		$this->limite = $limite;
	}

	public function saque($valor){
		if(($this->saldo + $this->limite) - $valor < 0){
			echo "Saldo insuficiente. <br>";
		} else {
			$this->saldo -= $valor;
			echo "Saque feito com sucesso. Seu saldo atual é: $this->saldo.<br>";
		}
	}
}

$c1 = new Corrente(100, 137, 10000, 1000);
$c1->depositar(500);
$c1->saque(10800);
$c1->depositar(500);
echo $c1->getDetalhes();