# PHP

Repositório criado para *aprender php*.

# Sintaxe PHP:

## Conceitos básicos:
* // comentário aqui -- Fazer comentários de uma linha.
* /* comentário aqui */ -- Fazer comentários de mais de uma linha.
* print ""; ou echo ""; -- Mostrar na tela.  


## Variáveis:
* $name_variavel -- Declaração de variável.
* echo "meu nome é $nome"; -- usando variaveis no echo.

## Variáveis variáveis:
-- $bebida = "Refrigerante";
   $$bebida = "Coca"; --
Nada mais é que um variável que usa o valor de uma variável como nome de uma nova. Só não entendi o propósito disso.

## Tipos de variáveis:
* boolean : true e false.
* objetos:
	'''
	class Cliente {
		public $nome;

		public function set_name($name){
			$this->$nome = $name;
		}
    }
    $cliente = new Cliente();
    '''

