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
	<?php require_once 'process.php'; ?>

	<?php 
    $mysqli = new mysqli('localhost', 'bruno', '123', 'hotel2') or die(myslqi_error($mysqli));
    $result_quarto = $mysqli->query("SELECT * FROM Quarto WHERE id NOT IN ( SELECT quarto_id FROM Reserva )") or die($mysqli->error); 
    ?>

    <div data-pop="0"  class="bg-pop z-2 w-100 h-100 d-none">
        <div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border rounded bg-lightblue">
            <form action="minhasreservas.php" method="POST">            
                <div class="row p-0">            
                	<h4 class="col-auto text-light">Insira o seu CPF</h4>        
                </div>
                <div class="row">
                    <div class="col mt-8">                                                                        
                        <input type="text" class="w-100 s-32 input" maxlength="11" name="cpf">
                    </div>                                                    
                </div>
                <div class="row mt-16">
                    <div class="ml-auto col-sm-auto">
                        <button name="minhasreservas" type="submit" class="btn btn-warning"><span class="px-8 py-8">Avançar</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container-fluid">
       <div class="mt-24 row">
          <?php while($row = $result_quarto->fetch_assoc()): ?>

           <div class="w-100 mx-24 mt-8 b-bluelight bg-gray">
               <div class="mt-8 mx-8 row">
                   <div class="col-xl-8 col-lg-6 my-auto">
                      <span>Quarto </span>
                      <span><?php echo $row['id'];?></span>
                      <span>, </span>
                      <span> <?php echo $row['estrelas'];?> </span>
                      <img class="s-24" src="Assets/Icons/Star.png" >
                      <span>, </span>
                      <img class="s-16" src="Assets/Icons/PIN.png" >
                      <span> <?php echo $row['local'];?> </span>               
                  </div>
                  <div class="col-sm-auto ml-auto">
                   Por Apenas 
                   <span class="text-success"> R$: <?php echo $row['valor_estadia'];?> </span> 
                  </div>
               </div>
               
                <div class="row mt-16 mb-8 mx-8">                
                <div class="col-sm-auto">
               <form action="popReservaExistente.php" method="POST">
                <input type="hidden" name="idquartoa" value=" <?php echo $row['id']; ?> ">
                <button type="submit" class="btn btn-secondary text-light" name="reservarexistente">
                    <span class="px-8 py-8">Reservar Com Cadastro Existente</span>
                </button>
                </div>
                <div class="col-sm-auto ml-auto">
                <form action="popReserva.php" method="POST">
                    <input type="hidden" name="idquarto" value=" <?php echo $row['id']; ?> ">
                    <button type="submit" class="btn btn-warning" name="reservar">
                       <span class="px-8 py-8">Reservar</span>
                   </button>
               </form>
                </div>
            </form>
            
    </div>
</div>

<?php endwhile; ?>

</div>
</div>

<?php require_once 'footer.php'; ?>

</body>
<script src="Assets/Jquery/jquery-3.4.1.js"></script>
<script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
<script src="Assets/index.js"></script>
</html>



