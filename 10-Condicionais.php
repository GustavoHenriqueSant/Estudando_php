<?php
//Condicionais
///////////////////////////////// IF/ELSE /////////////////////////////////////////////////
$number = 1;

if($number == 10):
	echo "É igual a 10";
elseif($number <= 9):
	echo "é menos ou igual a 9";
else:
	echo "É diferente de 10";
endif;

echo "<hr> <br>";

////Tem-se tbm o operador if "?", junto com ":" que é o operador else:
$media = 7;

echo ($media >= 6) ? "Aprovado" : "Reprovado";
echo "<hr>";

////////////////////////////////Switch / Case///////////////////////////////////////////////

$cor = "verddade";

switch ($cor):
	case "vermelho":
	echo "Sua cor preferida é vermelho";
	break;

	case "verde":
	echo "Sua cor preferida é verde";
	break;

	//Casso nenhum dos casos ocorra.
	default:
	echo "Sua cor preferida não tem em nosso banco de dados";

endswitch;


////////////////////////////////
