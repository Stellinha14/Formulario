<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Aula de PHP</title>
		<meta charset="UTF-8">
		<meta name="author" content="Patricia e Stella">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/css_01.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<style>
		@font-face {
   		font-family:abg;
   		src: url(fonte/Franchise.ttf);
		}
		@font-face {
   		font-family:basica;
   		src: url(fonte/Backed.ttf);
		}
		body{
			background-color: #969091;
			
		}
		.navbar{
			height: 65px;
			border-bottom: solid 4px #ab651a;
		}
		.bg-body-tertiary{
			background-color: #e88a25 !important;
			font-family: basica;
		}
		.formu{
			background-color:  #e0ddd3;
		}
		input{
			padding: 10px;
			border-radius: 10px;
			border: 2px;
			width: 90%;
		}
		button{
			width: 43%;
			height: 30px;
			border: 2px solid #ab651a;
			
		}
		.bord{
			border: 5px solid #ab651a;
		}
		.ft{
			border: 5px solid #ab651a;
		}

		.fd{
			background-color: #ede7d5;
		}
		.font{
			font-family:abg;
			font-size: 5vw;
		}
		.logo{
			width: 4vw;
			height: auto;
			margin-left: 2vw;
		}
		.f-abg{
			font-family:basica;
		}

	</style>
	<body>
		<nav class="navbar bg-body-tertiary justify-content-center">
			<h3>Filmes</h3>
		</nav>
		<div class="container">
			<div class="row">
				<section class="col-sm-12 col-md-6 formu mt-3 bord float-start">
					<h1 class="f-abg p-2 text-center">Cadastro:</h1>
						<form action="dados.php" method="post" name="teste">
							<div class="p-2 m-3 container">
								<label for="fn">Título</label><br>
								<input type="text" name="titulo" placeholder="Título do Filme" maxlength="50" required><br>
								
								<label for="end">Diretor</label><br>
								<input type="text" name="diretor" placeholder="Nome do diretor" maxlength="40"><br>
								
								<label for="num">Ano de Lançamento</label><br>
								<input type="number" name="ano" placeholder="Ano de Lançamento"><br>

								<label for="end">Data do Cadastro</label><br>
								<input type="date" name="datacad" placeholder="Data do Cadastro"><br>
							</div>
						<button class="ms-4 me-1" type="submit">Enviar</button>
						<button class="mb-4" type="reset">Resetar</button>
					</form>
				</section>	

				<div class="col-sm-12 col-md-6 align-items-center ">
					<img class="ft mt-3 col-12" src="img/filme.jpg">
					<div class="ft mt-3 fd p-1 d-flex justify-content-center align-items-center text-center">
						<h2 class="font mb-0">Cine Pipoca</h2>
						<img class="logo" src="img/pipoca.png">
					</div>
				</div>
			</div>
			

			<div class="row">
				
			</div>
		</div>
		<script src="js/all.min.js"></script>
	</body>
</html>
