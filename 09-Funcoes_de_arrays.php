<?php
//FUNÇÕES DE ARRAYS

// is_array($array) para ver se a varavel é array
$nomes = array('Gustavo', 'henrique', 'rodirgo');
echo is_array($nomes);


// in_array($valor, $array) para ver se há determinado valor no array
echo in_array('Gustavo', $nomes);

// array_keys($array) retorna um array tendo como valor as chaves do array passado como parâmetro.
print_r(array_keys($nomes));

//array_values($array) retorna um novo array com os valores do array passado como parâmetro.
print_r(array_values($nomes));

//array_merge($array, $array) que agrega o valor de dois arryas (concatena).
$nomesII = array('manolo', 'jubileu', 'eureka');
print_r(array_merge($nomesII, $nomes));

//array_pop($array) exclui o elemento que estpa na última posição. Essa função não só exclui bem como retorna o elemento excluído, podendo usar no echo por exemplo.
array_pop($nomes);
print_r($nomes);
$nomes[] = 'rodrigo';

//array_shift($array) exclui o elemento que está na primeira posição do array, bem como o retorna.
array_shift($nomes);
print_r($nomes);
array_unshift($nomes, 'Gustavo');

//array_unshift($array, $valor) adiciona um ou mais elementos no inicio do array. 
array_unshift($nomes, 'Gustavim', "Gustavão", "Gustavinhão");
print_r($nomes);

//array_push($array, $valorI, $valorII...) Adiciona um ou mais elementos no final do array.
array_push($nomes, 'rodriguim', 'Rodrigaum', 'Rodiguinhão');
print_r($nomes);

//array_combine($keys, $values) Mescla dois arryas, um representa as chaves do array final, e o outro os valores.
$keys = array('campeão', 'vice', 'terceiro');
$times = array('Curintia', 'Santos', 'São Paulo');
print_r(array_combine($keys, $times));

//array_sum($array) mostra o valor da soma de tds os elemntos de unm array numérico.
$numbers = array(1,2,3,4,5);
echo array_sum($numbers);

//explode("caracter", $string) funciona como o spplit do python, pega uma string e a separa em um array conforme encontra um caracter delimitador.
$frase = "Meu nome não é junin";
print_r(explode(' ', $frase));

//implode('caracter', $array) o inplode faz o contrário do explode, pega um array e o transforma numa string, colocando como separados dos elementos um caracter específico.
echo implode(' e ', $nomes);

