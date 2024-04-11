<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Aula de PHP</title>
		<meta charset="UTF-8">
		<meta name="author" content="Patricia e Stella">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.php">
	</head>
	<body>
		<?php
			$titulo = $_POST["titulo"];
			$datacad = $_POST["datacad"];
			$datacad_br = date ("d/m/Y",strtotime($datacad));
			$diretor = $_POST ["diretor"];
			$ano = $_POST ["ano"];
			
			echo'<nav class="navbar bg-body-tertiary justify-content-center">';
				echo"<h3>Confirme os Dados</h3>";
			echo"</nav>";
			echo '<div class = "row">';
				echo '<div class= "col-sm-12 col-md-12 col-lg-12">';
					echo'<div class="container mt-5 formu bord">';
						echo'<div class="font text-center bg-body-tertiary p-2 border-bottom"><h4>Informações de Cadastro</h4></div>';
						echo'<div class="p-3 justify-content-center align-items-center">';
							echo"<p><strong>Título do Filme:</strong> $titulo</p>\n";
							echo"<p><strong>Diretor do Filme: </strong>$diretor</p>\n";
							echo"<p><strong>Ano de Lançamento: </strong>$ano</p>\n";
							echo"<p><strong>Data do Cadastro:</strong> $datacad_br</p>\n";
							echo '<div class= "d-flex justify-content-center align-items-center">';
								echo '<button id="bt1">Enviar</button>';
								echo '<button class="ms-4" id="bt2">Resetar</button>';
							echo '</div>';
						echo"</div>";
					echo"</div>";
			echo '</div>';
		?>
	</body>
	<script src="js/index.js"></script>
</html>