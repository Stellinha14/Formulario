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
			overflow-x: hidden;
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
			
            margin-top: 8vw;
		}
		.bord{
			border: 5px solid #ab651a;
		}
		.ft{
			border: 5px solid #ab651a;
            bottom: 0;
		}
        .fd{
			background-color: #ede7d5;
		}
		.cad{
			font-family: abg;
            font-size: 70px;
		}
		.font{
			font-family:abg;
			font-size: 4vw;
		}
		.logo{
			width: 4vw;
			height: auto;
			margin-left: 2vw;
		}
	</style>
	<body>
		<nav class="navbar bg-body-tertiary justify-content-center">
			<h3>Agradecemos a Preferência!</h3>
		</nav>
		<div class="row d-flex justify-content-center">
			<div class="col-sm-12 col-md-7">
				<div class="container align-items-center ">
					<section class="formu bord">
						<div class="text-center p-2 m-3 container">
							<h4 class="cad">Cadastro ralizado com sucesso!</h4>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class= "row d-flex justify-content-center">
			<div class="col-10 col-sm-10 col-md-5">
				<div class="container">
					<div class="ft mt-5 fd p-1 d-flex justify-content-center align-items-center">
						<h2 class="font mb-0">Cine Pipoca</h2>
						<img class="logo" src="img/pipoca.png">
					</div>
				</div>
			</div>
		</div>
		<script src="js/all.min.js"></script>
	</body>
</html>
