<?php

//strtoupper($string) retorna a string passada com tds os seus caracteres maiúsculos.
$nome = "Gustavo";
$nome = strtoupper($nome);
echo $nome."<br>";

//strtolower($string) retorna a string passada com tds os seus caracteres minúsculos.
$nome = strtolower($nome);
echo $nome."<br>";

//substr($string, start, comprimento) retorna apenas um parte da string, especificando em qual caracter deve ser retonado pra frente. Posso tbm opicionalmente colocar a quantidade de caracteres q deves=m ser retornados.
$mensagem = "Olá mundo!";
echo substr($mensagem, 4);

//