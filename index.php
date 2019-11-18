<!DOCTYPE html>
<html lang="en">
<head>
    <script src="Assets/Jquery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Base/Base.css">
    <link rel="stylesheet" href="Assets/Base/Icons.css">
    <link rel="stylesheet" href="Assets/Module.css">
    <link rel="stylesheet" href="Assets/Colors.css">
    <script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <title>ICSProject</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark grad">
    <a class="navbar-brand" href="index.php">ICS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Inicio <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="admReservas.php">Gerenciar Reservas</a>
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
    <div class="w-100 mx-24 mt-8 b-bluelight bg-gray">
        <div class="my-8 mx-8 row">
            <div class="col-xl-8 col-lg-6 my-auto">
                <?php //Campo do ID ?>  
                <span>,</span>
                <?php//Campo das Estrelas ?>
                <img class="s-24" src="Assets/Icons/Star.png" >,
                <img class="s-16" src="Assets/Icons/PIN.png" >
                <?php//Campo do Local ?>                
            </div>
            <div class="offset-md-1 col-sm-auto my-auto">
                Por Apenas
                <?php //Campo do Preço com a class "text-success" ?>
            </div>
            <div class="ml-auto col-sm-auto">
                <a href="reservas.php"><div class="btn btn-warning"><span class="px-8 py-8">Reservar</span></div></a>
            </div>
        </div>        
    </div>
</div>
</div>
<nav class="navbar navbar-dark grad mt-32">    
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
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
                    <a class="nav-link text-light" href="#"><span class="icon icon-face"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><span class="icon icon-twitter"></span></a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>