<!DOCTYPE html>
<html>
<head>
	<title>Validate filters</title>
</head>
<body>
	<?php
		//array de erros
		$erros = array();

		if(isset($_POST['enviar'])){
			//Sanitize filtera:
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
			echo "$nome<br>";

			$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
			echo "$idade<br>";

			$email = filter_input(INPUT_POST, 'e-mail', FILTER_SANITIZE_EMAIL);
			echo "$email<br>";

			$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
			echo "$url<br>";
		}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="e-mail"><br>
		Nome: <input type="text" name="nome"><br>
		ULR: <input type="text" name="url">
		<button type="submit" name="enviar"> Enviar </button>
	</form>
</body>
</html>