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

## Operadores aritmeticos:
* adição: +
* subtração: -
* divisão: /
* Módulo: %
* Multiplicação: *
* Exponesiação: **
* Incremento: ++$variavel = incrementa e retorna o valor após | $variavel++ = retorna a variável e incrementa depois;
* Decremento: --$variavel e --$variavel;
* $a += $b;
* $a /= $b ... ;

## Operadores de comparacao:
* == verifica se o valor das variáveis são iguais
* != Verifica se o valor das variáveis não são iguais
* === Verifica se as variáveis são idênticas.
* !=== Verifica se as variáveis são idênticas.
* <> Me parece ambiguo a !=, não entendi esse operador muito bem, quando precisar ou se lembrar antes procurar saber.
* <
* >
* <=
* >=
* <=> Esse operador faz um comparaçõa com binada da seguinte sintaxe: numver1 <=> number2. Ele ve qual deles é maior, se o 1 for mair ele da retorna -1, caso forem iguais retorna 0, e caso o 2 for maior retorna 1.

## Operadores lógicos:
*  && and
* || or
* xor ou exclusivo
* ! negação

## Estruturas de repetição:
* O while tem a seguinte sintaxe:
  '''
  while($contador <= 10):
  	echo $contador."<br>";
	$contador++;
  endwhile;
  '''
  **Note meu amiguinnho que em php eles chamas : e end em estruturas como escrita especial, elas podem sersubstituídas por {}**
* O Do while é a mesma coisa que em C, e ele não possui escrita especial, pe obrigatoriamente usadno {}.
* O foreach vc já viu.

## Funções para strings:
* https://www.php.net/manual/pt_BR/ref.strings.php | link para documentação do PHP para a bib String padrão.

## Criando Funções:
* sintaxe:
  '''
  function function_name(parameters){
  	#Cod;
  }

  function_name(parameters);
  '''

## Variáveis superglobais:
* Variáveis super globais são variáveis definidas pelo PHP, podedno ser usadas em qualquer lugar, não dependendo de escopo.
* $GLOBALS: Array qe possui todas as variáveis de escopo global do cód, pode-se acessar essas variáveis usando seus nomes como índice do array.
* $_SERVER[]: É um array que possui informações do servidor onde o script está inserido. Por exemplo $_SERVER["PHP_SELF"] retorna o nome do script. Há diversas outras informações como porta da aplicação, localização do script, entre outros.
* $_POST[]: É um array que possui todas os dados enviados por um requisição POST.
* $_GUET[]: Array que armazena tds as variáveis involvida com o método de reuisição GUET do HTTP. Os dados são passados pelo URL.  


## Validate filters:
* Servem para validar campos de formulários, tudo é feito baseado no método filter_input($method_input, name_input, type_input).
* Nela você fornece o que quer validar, o nome da variável, o método que pode ser POST, GET, etc, e o type que uqer q a variável seja.
* Caso queria relembrar os tipos de type ou aprender um method de requisição novo: https://www.php.net/manual/en/filter.filters.validate.php.

## Sanitize Filters:
* Servem para limpar campos, por exemplo ao colocar um campo de texto em um formulário, pode-se colocar nele um código php ou HTML, e por exemplo incluir um button na página, isso pode ser resolvido filtrando caracters especial por exemplo. Outro exemplo é ter um campo numérico, usando métodos de Sanitive filters pode-se limpar qualquer caracter que não seja numérico do campo.
* Tudo é baseado tabmém no método filter_input().
* Novamente pelos mesmos motivos: https://www.php.net/manual/en/filter.filters.sanitize.php.

## Sessions:
* pelo que entendi as sessions são como array que podem ser acessados por outras páginas além daquele que ele foi delcarado.
* Tudo é feito em cima da variável superglobal chamada $_SESSION[], definida ao executar o método session_start(), ao definir uma sessão dando um index para a mesma pode-se atribuir valores como se fosse um array.
* Uma vez startada esse conteúdo pode ser manipulado por outras sessões. As sessions podem ser usadas para fazer sistemas de carrinhos em lojas ou estruturas de login.
* Além da session_start() há muitos outros métodos para manipular as sessions como session_unset() para limpar a sessão, ou session_destroy() para destruir a sessão. Em um sistema de login elas podem ser usadas para limpar a atividade do usuário, e após fazer o logoof do usuário.

