<!DOCTYPE html>
<html>
<head>
	<title>Validate filters</title>
</head>
<body>
	<?php
		$erros = array();

		if(isset($_POST['enviar'])){
			if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
				$erros[] = "A idade não foi passada como numérico.";
			}
		}

		if(isset($_POST['e-mail'])){
			if(!$email = filter_input(INPUT_POST, 'e-mail', FILTER_VALIDATE_EMAIL)){
				$erros[] = "O e-mail não possui formato válido.";
			}
		}

		foreach ($erros as $erro) {
			echo "<li> $erro </li><br>";
		}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="e-mail"><br>
		Peso: <input type="number" name="peso"><br>
		IP: <input type="text" name="ip"><br>
		ULR: <input type="text" name="urll">
		<button type="submit" name="enviar"> Enviar </button>
	</form>
</body>
</html>