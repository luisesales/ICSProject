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
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admReservas.php">Gerenciar Reservas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="admQuartos.php">Gerenciar Quartos</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row mx-4 b-bluelight mt-32">
        <div class="my-8 mx-8">
            <div class=col-sm-4>
                <?php //Campo do ID ?>  
                <span>,</span>
                <?php//Campo das Estrelas ?>
                <img src="Assts/Icons/Star.png" >,
                <?php//Campo do Local ?>
            </div>
        </div>        
    </div>
</div>
</body>
</html>