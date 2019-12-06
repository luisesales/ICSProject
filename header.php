<nav class="navbar navbar-expand-lg navbar-dark grad">
    <a class="navbar-brand" href="index.php"><span class="icon icon-logo size-logo-header"></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">    
        <ul data-pop="0" class="navbar-nav mr-auto d-none">
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Inicio <span class="sr-only">(página atual)</span></a>
            </li>            
            <li class="nav-item">
                <a class="nav-link text-light" href="admQuartos.php">Gerenciar Quartos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light call" data-item="0" data-function="0">Minhas reservas</a>
            </li>
        </ul>
        <ul data-pop="0" class="navbar-nav ml-auto d-none">
            <li data-function="1" class="nav-link change">
                <a class="exit"  data-toggle="sair">SAIR<span class="icon icon-exit "></span></a>                
            </li>
        </ul>
        <ul data-pop="1" class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Inicio <span class="sr-only">(página atual)</span></a>
            </li>            
            <li class="nav-item">
                <a class="nav-link text-light call" data-item="0" data-function="0" style="cursor: pointer;">Minhas reservas</a>
            </li>
            
        </ul>
        <ul data-pop="1" class="navbar-nav ml-auto">
            <li data-function="0" data-item="2" class="nav-item call">
                <a href="login.php" class="nav-link btn btn-outline-light enter">Entrar</a>
            </li>
        </ul>
    </div>
</nav>