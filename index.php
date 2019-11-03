<!DOCTYPE html>
<html lang="en">
<head>
    <script src="Assets/Jquery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Base.css">
    <link rel="stylesheet" href="Assets/Module.css">
    <script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <title>ICSProject</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary grad">
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
    </div>
</nav>
<div class="container-fluid mt-24">
    <div class="row mx-8 mt-8 b-bluelight bg-gray">
        <div class="my-8 mx-8">
            <div class="col-sm-5 w-100">
                <?php //Campo do ID ?>  
                <span>,</span>
                <?php//Campo das Estrelas ?>
                <img class="s-8" src="Assets/Icons/Star.png" >,
                <?php//Campo do Local ?>
            </div>
            <div class="offset-sm-1 col-sm-2 w-100">
                Por Apenas
                <?php //Campo do Preço com a class "text-success" ?>
            </div>
            <div class="offset-sm-1 col-sm-2 w-100">
                <div class="btn btn-warning"><a class="px-8 py-8">Reservar</a></div>
            </div>
        </div>        
    </div>
</div>
</body>
</html>