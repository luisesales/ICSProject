<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Base/Base.css">
    <link rel="stylesheet" href="Assets/Base/Icons.css">
    <link rel="stylesheet" href="Assets/Module.css">
    <link rel="stylesheet" href="Assets/Colors.css">
    <meta charset="UTF-8">
    <title>ICSProject</title>
</head>
<body class="z-1">
	<?php require_once 'process.php'; ?>

	<?php 
        $mysqli = new mysqli('localhost', 'bruno', '123', 'hotel') or die(myslqi_error($mysqli));
        $result_quarto = $mysqli->query("SELECT * FROM Quarto") or die($mysqli->error);
    ?>
	<div data-pop="0" class="bg-pop z-2 w-100 h-100 d-none ">
        <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-50 border border-dark">
            
            <div class="row p-0">
            
            <h4 class="col-auto order-sm-1 order-2">Insira os dados a Seguir</h4>
            <button type="button" data-function="0" data-item="0" class="close col-auto call ml-auto order-sm-2 order-1 mr-8" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>            
            </div>
            <div class="row">
                <div class="col-lg-9 col-12 mt-8">
                    <h5>Seu Nome</h5>
                    <textarea class="w-100 s-32" data-input="nome"></textarea>
                </div>
                <div class="col-lg-3 col-sm-4  mt-8">
                        <h5>Quarto</h5>
                        <input type="text" class="w-100 s-32" disabled data-input="quarto">
                    </div>                        
                <div class="col-md-auto mt-8">
                    <h5>Seu CPF</h5>
                    <input type="text" class="w-100 s-32" data-input="cpf">
                </div>
                <div class="col-md-auto mt-8">
                        <h5>Nº de Acompanhantes</h5>
                        <input type="text" class="w-100 s-32 " data-input="acompanhantes">
                    </div>                                            
            </div>
            <div class="row">
                <div class="ml-auto col-sm-auto">
                        <a href="reservas.php"><div class="btn btn-warning"><span class="px-8 py-8">Reservar</span></div></a>
                </div>
            </div>
        </div>
    </div>
	<nav class="navbar navbar-expand-lg navbar-dark grad">
	    <a class="navbar-brand" href="index.php">
                    
        </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item">
	                <a class="nav-link text-light" href="index.php">Inicio <span class="sr-only">(página atual)</span></a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-light" href="admQuartos.php">Gerenciar Quartos</a>
	            </li>
	            
	        </ul>

	        <ul class="navbar-nav ml-auto">
	            <li class="nav-link">
	                <a class="exit" href="index.php" data-toggle="sair">SAIR<span class="icon icon-exit"></span></a>                
	            </li>
	        </ul>
	    </div>
	</nav>
	<div class="container-fluid">
	<div class="mt-24 row">
		<?php while($row = $result_quarto->fetch_assoc()): ?>

	    <div class="w-100 mx-24 mt-8 b-bluelight bg-gray">
	        <div class="my-8 mx-8 row">
	            <div class="col-xl-8 col-lg-6 my-auto">
	            	<span>Quarto </span>
	                <span> <?php echo $row['id'];?> </span>
	                <span>, </span>
	                <span> <?php echo $row['estrelas'];?> </span>
	                <img class="s-24" src="Assets/Icons/Star.png" >
	                <span>, </span>
	                <img class="s-16" src="Assets/Icons/PIN.png" >
	                <span> <?php echo $row['local'];?> </span>               
	            </div>
	            <div class="offset-md-1 col-sm-auto my-auto">
	                Por Apenas R$ 
	                <span class="text-success"> <?php echo $row['valor_estadia'];?> </span> 
	            </div>
	            <div data-function="0" data-item="0" class="ml-auto col-sm-auto call">
	                <a href="index.php?reservar= <?php echo $row['id_quarto']; ?> " >
	                	<div class="btn btn-warning">
	                		<span class="px-8 py-8">Reservar</span>
	                	</div>
	                </a>
				</div>
	        </div>
	    </div>

		<?php endwhile; ?>

	</div>
	</div>
	<nav class="navbar navbar-dark grad mt-32 footer w-100">    
        <div class="ml-auto">
            <ul class="navbar nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><span class="icon icon-face"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><span class="icon icon-google"></span></a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><span class="icon icon-yout"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><span class="icon icon-whats"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><span class="icon icon-twitter"></span></a>
                </li>
            </ul>
        </div>
    </nav>
</body>
<script src="Assets/Jquery/jquery-3.4.1.js"></script>
<script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
 <script src="Assets/index.js"></script>
</html>



