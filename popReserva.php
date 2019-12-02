<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Base/Base.css">
    <link rel="stylesheet" href="Assets/Base/Icons.css">
    <link rel="stylesheet" href="Assets/Module.css">
    <link rel="stylesheet" href="Assets/Base/Colors.css">
    <meta charset="UTF-8">
    <title>ICSProject</title>
</head>
<body class="z-1 overflow-auto">
<div data-pop="1" class="bg-pop z-2 w-100 h-100 d-block">
        <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-50 border bg-lightblue rounded">
            
            <div class="row mx-0 text-light">
            
                <h4 class="col-auto order-sm-1 order-2 pt-2 px-0">Insira os dados a Seguir</h4>
                <button href="index.php" type="button" data-function="0" data-item="0" class="close text-light col-auto call ml-auto order-sm-2 order-1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>            
            </div>
            <!-- -->
            <form action="process.php" method="POST">
            <div class="row mt-16 mx-0 w-100 text-light">
                                   
                    <input type="hidden" name="hospede_id" value="<?php echo $rra[0]+1; ?>">
                <div class="row mx-0 w-100">
                    <div class="col-lg-9 col-12 pl-0 mx-0 mt-8">
                        <h5>Seu Nome</h5>
                        <input type="text" class="w-100 s-32 input" value="<?php echo $nome; ?>" name="nome">
                    </div>   
                    <div class="col-sm-auto col-12 pl-0 mx-0 mt-8">
                        <h5>Quarto</h5>
                        <input  name="quarto_id" disabled class="w-100 s-32 input" id="quarto_id">  
                    </div>  
                                                  
                    <div class="col-sm-auto col-12 pl-0 mt-8">
                        <h5>Seu CPF</h5>
                        <input type="text" class="w-100 s-32 input" value="<?php echo $cpf; ?>" maxlength="11" name="cpf">
                    </div>
                    <div class="col-sm-auto col-12 pl-0 mt-8">
                        <h5>Nº de Pessoas</h5>
                        <input type="number" class="w-100 s-32 input" value="<?php echo $qtd_pessoas; ?>" name="qtd_pessoas">
                    </div>
                </div>
                </div>
                    <div class="row mt-16 w-100 ">
                        <button class="ml-auto btn btn-warning" type="submit" href="index.php" name="reservar">Reservar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>
</body>
</html>