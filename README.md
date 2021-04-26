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

## Escopo de variáveis:
* Como em outras linguagens há dois escopos: o local e o global.
* Para poder usar uma variável global em uma função, ou uma variável local de um função fora dela, essa variável deve ser declara como segue: global $variavel_name;
* As variáveis globais podem ser referenciadas com o array $GLOBALS que é definido na linguagem PHP, usando o nome dessa variável global como indice.

## Constantes em PHP:
* As contantes no OHO são definidas através de uma função, ela é: define("NOME-DA-VARIAVEL", seu valor).
* Pode-se fazer arrayz constantes tbm, da seguinte forma: define("NOME-DO-ARRAY", [1,2,4]).

## Arrays em PHP:
* Os array são declaradas como $array-name = array(1,2,3);
* Os arrays podem ser printados atráves do echo especificando o indice do array: echo $array[0]. Ou através do método print_r(array);
* Podes-se inserir elementos na última casa do array da seguinte maneira: $array_name[] = 'amarock'.
* Pode-se tbm especificar aonde quer inserir: $array_name[6] = 'amarock';
* Para percorrer um array podemos usar:
	'''
	foreach($vetor_name as $i){
		echo $i;
	}
	'''
  Que em python seria a mesma coisa de:
  '''
  for i in vetor_name:
  	print(i)
  '''
* Pode-se contar quanto um elementos um array tem com o método count($vetor_name);
* Ademais poder ter três tipos de array, os numerais que são os passados atpe eñtão que possuem index numéricos, os associativos que possuem index não ´numéricos, que se assemelham a dicionários em python:
  '''
  $vector = array('nome' => 'Gustavo', 'idade'=> 20, 'altura' => 1.74);
  '''
* E por útlimo temos os arrays multidimensionais, que se assemelham a listas de listas em python:
  '''
  $times = array('cariocas' => array('vasco', 'flamengo'),
  				 'paulostas' => array('santos', 'sao paulo'));
  '''