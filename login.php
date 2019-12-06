<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
	<link rel="stylesheet" href="Assets/Base/Base.css">
	<link rel="stylesheet" href="Assets/Base/Icons.css">
	<link rel="stylesheet" href="Assets/Module.css">
	<link rel="stylesheet" href="Assets/Base/Colors.css">
	<meta charset="UTF-8">
	<title>ICSProject</title>
</head>

<body>
	<?php require_once 'header.php'; ?>
	<?php require_once 'process.php'; ?>
	<div data-pop="0" class="bg-pop z-2 w-100 h-100 d-none">
		<div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border rounded bg-lightblue">
			<div class="row p-0">
				<h4 class="col-auto text-light">Insira o seu CPF</h4> 
			</div>
			<div class="row">
				<div class="col mt-8">
					<input type="text" class="w-100 s-32 input" id="pass">
				</div>
			</div>
			<div class="row mt-16">
				<div class="ml-auto col-sm-auto">
					<a data-function="0" data-item="0" class="search">
						<div class="btn btn-warning"><span class="px-8 py-8">Avançar</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid px-0">
		<div class="login col-md-6 col-sm-5 offset-md-3 offset-sm-3 col-xs-auto offset-xs-0">
			<div class="circle mb-1 rounded-circle mx-auto border">
				<img src="Assets/Images/logohotel.png" style=" width: 128px; height: 124px; ">
			</div>
			<div class="rounded bg-lightblue text-light px-16 pt-64 pb-16">
				<form action="#" method="POST">
					<h5 class="row mx-0">Insira a Senha Mestra</h5>
					<input class="w-100 s-32 input" type="password" name="senha">
					<div class="row mx-0 mt-32">
						<button type="submit" class="ml-auto btn btn-warning px-24 " name="loginsenha" id="loginsenha">Login</button>
					</div>
				</form>
				<?php if (isset($_SESSION[ 'message'])): ?>
				<div id="loginmessage"> <span> 

                            <?php 

                            echo $_SESSION['message']; 
                            
                            ?> 

                        </span>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php require_once 'footer.php'; ?>
</body>

</html>