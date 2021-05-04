<!DOCTYPE html>
<?php

	//Fazendo uma espécie de import para o arquivo de conexão ao db:
	require_once 'dbConeecting.php';

	//Iniciando a sessão para o sistema de login
	session_start();

	if(isset($_POST['entrar'])){
		//Tratamento dos dados para poder fazer uma query SQL;
		$erros = array();
		$login = mysqli_escape_string($conect, $_POST['nickname']);
		$senha = mysqli_escape_string($conect, $_POST['senha']);

		if(empty($login) || empty($senha)){
			$erros[] = "<li> O campo login/senha deve ser preenchido. </li>";
		} else {
			//Realizando query SQL
			$sql = "SELECT * FROM usuários";
			$resultado = mysqli_query($conect, $sql);

			var_dump($resultado);
			if(mysqli_num_rows($resultado) > 0){
				$query = "SELECT * FROM usuários WHERE login = '$login' AND senha = '$senha';";
				$resultado = sqli_query($conect, $query);

				if(mysqli_num_rows($resultado) == 1){
					$dados = mysqli_fetch_array($resultado);
					$_SESSION['logado'] = true;
					$_SESSION['id'] = $dados['id'];
					header('Location: home.php');
				} else {
					$erros[] = "<li> Usuário ou senha não válidos.</li>";
				}
			} else {
				$erros[] = "<li> Usuário inexistente. </li>";
			}
		}
	}
?>

<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Sistema de login - Teste</h1>

	<?php
		//Mostrando os erros:
		if(!empty($erros)){
			foreach ($erros as $erro){
				echo $erro."<br>";
			}
		}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Usuário: <input type="text" name="nickname">
		Senha: <input type="text" name="senha"> 
		<button type="submit" name="entrar">Entrar</button>
	</form>
</body>
</html>