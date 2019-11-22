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
    <div data-pop="0" class="bg-pop z-2 w-100 h-100 d-none ">
        <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-50 border border-dark">            
            <div class="row">            
            <h4 class="col-auto order-sm-1 order-2">Insira os dados a Seguir</h4>
            <button type="button" data-function="0" data-item="0" class="close col-auto call ml-auto order-sm-2 order-1 mr-8" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>            
            </div>
            <div class="row">
                    <div class="col-lg-3 col-sm-4  mt-8">
                            <h5>ID</h5>
                            <input type="text" class="w-100 s-32"  data-input="id">
                        </div> 
                <div class=" col-12 mt-8">
                    <h5>Local</h5>
                    <textarea class="w-100 s-32" data-input="local"></textarea>
                </div>                                               
            </div>
            <div class="row mt-16">
                <div class="ml-auto col-sm-auto">
                        <a href="admQuartos.php"><div class="btn btn-warning" ><span class="px-8 py-8">Criar</span></div></a>
                </div>
            </div>
        </div>
    </div>
    <div data-pop="0"  class="bg-pop z-2 w-100 h-100 d-none">
            <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border border-dark">            
                <div class="row p-0">            
                <h4 class="col-auto order-sm-1 order-2">Insira a nova ID</h4>
                <button type="button" data-function="0" data-item="1" class="close col-auto call ml-auto order-sm-2 order-1 mr-8" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>            
                </div>
                <div class="row">
                        <div class="col mt-8">
                                <h5>ID</h5>
                                <input type="text" class="w-100 s-32" data-input="id">
                            </div>                                                    
                </div>
                <div class="row mt-16">
                    <div class="ml-auto col-sm-auto">
                            <a href="admQuartos.php"><div class="btn btn-warning"><span class="px-8 py-8">Atualizar</span></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div data-pop="0"  class="bg-pop z-2 w-100 h-100 d-none">
            <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border border-dark">            
                <div class="row p-0">            
                <h4 class="col-auto order-sm-1 order-2">Insira senha mestra</h4>
                <button type="button" data-function="0" data-item="2" class="close col-auto call ml-auto order-sm-2 order-1 mr-8" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>            
                </div>
                <div class="row">
                        <div class="col mt-8">                                
                                <input type="text" class="w-100 s-32" id="pass">
                            </div>                                                    
                </div>
                <div class="row mt-16">
                    <div data-function="0" data-item="2" class="ml-auto call col-sm-auto log">
                            <a><div class="btn btn-warning"><span class="px-8 py-8">Entrar</span></div></a>
                    </div>
                </div>
            </div>
        </div>    
    <div class="container-fluid mt-24">
        <table class="table">
            <thead class="bg-lightblue text-light">
                <tr>
                    <th class="col-1">Quarto</th>
                    <th class="col-auto">Local</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border"><!--Espaço para incluir o dado do id --></td>
                    <td class="border"><!--Espaço para incluir o dado do local --><div class="tri ml-auto"></div></td>
                </tr>
                <tr data-pop="0" class="sub">
                    <td colspan="2" class="border">
                        <div class="row mx-0">
                        <div data-function="0" data-item="1" class="col-auto call">
                                <a ><div class="btn btn-primary"><span class="px-8 py-8">Editar</span></div></a>
                        </div>
                        <div data-function="0" class="ml-auto col-auto call">
                                <a ><div class="btn btn-danger"><span class="px-8 py-8">Excluir</span></div></a>
                        </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row mt-32">
            <div data-function="0" data-item="0" class="ml-auto col-auto call">
                <a ><div class="btn btn-warning"><span class="px-8 py-8">Adicionar Quarto</span></div></a>
            </div>
        </div>
    </div>
    </body>
    <script src="Assets/Jquery/jquery-3.4.1.js"></script>
    <script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
    <script src="Assets/index.js"></script>
    </html> 