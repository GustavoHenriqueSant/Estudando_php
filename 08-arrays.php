<?php
//ARRAYS

$carros = array('hilux', 'astra', 'onix', 'uno');
//para printar um array usa-se o seginte método:
print_r($carros);
//adição:
$carros[] = 'amarock';
echo "<br> <hr>";
print_r($carros);
// adição especificando o índice:
$carros[2] = 'camaro';
echo "<br> <hr>";
print_r($carros);