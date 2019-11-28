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
        <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-50 border border-dark bg-lightblue rounded">            
            <div class="row">            
            <h4 class="col-auto order-sm-1 order-2 text-light">Insira os dados a Seguir</h4>
            <button type="button" data-function="0" data-item="0" class="close col-auto call ml-auto order-sm-2 order-1 mr-8 text-light" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>            
            </div>
                <form>
            <div class="row text-light">

                    <div class="col-lg-3 col-sm-4 mt-8">
                        <h5>ID</h5>
                        <input type="text" class="w-100 s-32 input"  name="id">
                    </div> 
                    <div class=" col-12 mt-8">
                        <h5>Local</h5>
                        <input type="text" class="w-100 s-32 input" name="local">
                    </div>
                    <div class=" col-12 mt-8">
                        <h5>Estrelas</h5>
                        <input type="number" class="w-100 s-32 input" name="estrelas">
                    </div>  
                    <div class=" col-12 mt-8">
                        <h5>Valor</h5>
                        <input type="number" class="w-100 s-32 input" name="local">
                    </div>    
                </div>
                <div class="row mt-16">
                    <div class="ml-auto col-sm-auto">
                            <a href="admQuartos.php">
                            <button type="submit" class="btn btn-warning" >Criar</button>                                                                    
                            </a>
                    </div>
                </div>
                </form>
        </div>
    </div>
    <div data-pop="0"  class="bg-pop z-2 w-100 h-100 d-none">
            <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border border-dark bg-lightblue rounded">            
                <div class="row p-0">            
                <h4 class="col-auto order-sm-1 order-2 text-light">Insira a nova ID</h4>
                <button type="button" data-function="0" data-item="1" class="close col-auto call ml-auto order-sm-2 order-1 mr-8 text-light" aria-label="Close">
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
        <?php require_once 'header.php'; ?>
    <div class="container-fluid mt-24">
        <table class="table">
            <thead class="bg-lightblue text-light">
                <tr>
                    <th class="col-auto">Quarto</th>
                    <th class="col-auto">Local</th>
                    <th class="col-auto">Estrelas</th>
                    <th class="col-auto">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result_quarto->fetch_assoc()): ?>
                <tr>
                    <td class="border"><?php echo $row['id'];?></td>
                    <td class="border"><?php echo $row['local'];?></td>
                    <td class="border"><?php echo $row['estrelas'];?></td>
                    <td class="border"><?php echo $row['valor_estadia'];?> <div class="tri ml-auto"></div></td>                    
                </tr>
                <tr data-pop="0" class="sub bg-secondary">
                            <td colspan="4" class="border">
                                <div class="row mx-0">
                                <div data-function="0" data-type="1" data-item="1" class="call col-auto">
                                        <a><div  class="btn btn-primary"><span class="px-8 py-8">Editar</span></div></a>
                                </div>
                                <div class="ml-auto col-auto">
                                        <a href="process.php?deletarquarto= <?php echo $row['id']; ?>"><div class="btn btn-danger"><span class="px-8 py-8">Excluir</span></div></a>
                                </div>
                                </div>
                            </td>
                        </tr>
                <?php endwhile; ?>
                <!-- <tr data-pop="0" class="sub">
                    <td colspan="2" class="border">
                        <div class="row mx-0">
                        <div data-function="0" data-item="2" class="col-auto call">
                                <a ><div class="btn btn-primary"><span class="px-8 py-8">Editar</span></div></a>
                        </div>
                        <div data-function="0" class="ml-auto col-auto call">
                                <a ><div class="btn btn-danger"><span class="px-8 py-8">Excluir</span></div></a>
                        </div>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <div class="row mt-32">
            <div data-function="0" data-item="0" class="ml-auto col-auto call">
                <a ><div class="btn btn-warning"><span class="px-8 py-8">Adicionar Quarto</span></div></a>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>
    </body>
    <script src="Assets/Jquery/jquery-3.4.1.js"></script>
    <script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
    <script src="Assets/index.js"></script>
    </html> 