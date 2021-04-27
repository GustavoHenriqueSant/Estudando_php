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

## Funções de arryas:
* is_array($array) para ver se a varavel é array
* in_array($valor, $array) para ver se há determinado valor no array
* array_keys($array) retorna um array tendo como valor as chaves do array passado como parâmetro.
* array_values($array) retorna um novo array com os valores do array passado como parâmetro.
* array_merge($array, $array) que agrega o valor de dois arryas (concatena).
* array_pop($array) exclui o elemento que estpa na última posição. Essa função não só exclui bem como retorna o elemento excluído, podendo usar no echo por exemplo.
* array_shift($array) exclui o elemento que está na primeira posição do array, bem como o retorna.
* array_unshift($array, $valor) adiciona um ou mais elementos no inicio do array. 
* array_push($array, $valorI, $valorII...) Adiciona um ou mais elementos no final do array.
* array_combine($keys, $values) Mescla dois arryas, um representa as chaves do array final, e o outro os valores.
* array_sum($array) mostra o valor da soma de tds os elemntos de unm array numérico.
* explode("caracter", $string) funciona como o spplit do python, pega uma string e a separa em um array conforme encontra um caracter delimitador.
* implode('caracter', $array) o inplode faz o contrário do explode, pega um array e o transforma numa string, colocando como separados dos elementos um caracter específico.

## Condicionais:
* A sintaxe das condicionais if e else são da seguinte maneria:
  '''
  if(boolean):
  	//logica;
  elseif(Boolean):
  	//logica;
  else:
    //logiaca;
  endif;
  '''
* Além disso Tem-se tbm o operador if "?", junto com ":" que é o operador else:
  '''
  echo ($media >= 6) ? "Aprovado" : "Reprovado";
  '''
* As condicionais *switch/case* tema  seguinte sintaxe:
  '''
  switch($opção):
    case opção1:
    	//logica;
    	break;

    case opção2:
    	//logica;
    	break;

    default:
    	//logica;
  endswitch;
* 
