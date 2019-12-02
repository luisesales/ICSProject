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
    <?php require_once 'header.php'; ?>
    <div data-pop="1"  class="bg-pop z-2 w-100 h-100 d-block">
            <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border bg-lightblue rounded">            
                <div class="row p-0">            
                <h4 class="col-auto order-sm-1 order-2 text-light">Insira a nova ID</h4>
                <button  href="admQuartos.php" type="button" data-function="0" data-item="1" class="close col-auto call ml-auto order-sm-2 order-1 mr-8 text-light" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>            
                </div>
                <div class="row text-light">
                        <div class="col mt-8">
                                <h5>ID</h5>
                                <input type="text" id="editid" class="w-100 s-32 input" data-input="id">
                            </div>                                                    
                </div>
                <div class="row mt-16">
                    <div class="ml-auto col-sm-auto">
                            <a href="admQuartos.php"><div class="btn btn-warning"><span class="px-8 py-8">Atualizar</span></div></a>
                    </div>
                </div>
            </div>
        </div>   
    <?php require_once 'footer.php'; ?>
</body>
</html>