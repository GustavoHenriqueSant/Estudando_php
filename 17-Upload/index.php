<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<?php
		if(isset($_POST['enviar'])){
			$formatos_permitidos = array("png", "txt", "gif");
			$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
			
			if(in_array($extensao, $formatos_permitidos)){
				$pasta = "arquivos/";
				$nome_temporario = $_FILES['arquivo']['tmp_name'];
				$novo_nome = uniqid().".$extensao";

				if(move_uploaded_file($nome_temporario, $pasta.$novo_nome)){
					$mensagem = "Upload feito com sucesso.";
				} else {
					$mensagem = "Formato inválido.";
				}
			}

		}

	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype="multipart/form-data">
		<input type="file" name="arquivo"><br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>