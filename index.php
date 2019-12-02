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
	<?php require_once 'process.php'; ?>

	<?php 
        $mysqli = new mysqli('localhost', 'bruno', '123', 'hotel') or die(myslqi_error($mysqli));
        $result_quarto = $mysqli->query("SELECT * FROM Quarto") or die($mysqli->error);
        $result_hospede = $mysqli->query("SELECT * FROM Hospede") or die($mysqli->error);
        $sql_hospede = mysqli_query($mysqli, "SELECT * FROM Hospede ORDER BY id DESC LIMIT 1");
        $rra = mysqli_fetch_row($sql_hospede);        
    ?>

    
	<div class="container-fluid">
	<div class="mt-24 row">
		<?php while($row = $result_quarto->fetch_assoc()): ?>

	    <div class="w-100 mx-24 mt-8 b-bluelight bg-gray">
	        <div class="my-8 mx-8 row">
	            <div class="col-xl-8 col-lg-6 my-auto">
	            	<span>Quarto </span>
	                <span><?php echo $row['id'];?></span>
	                <span> </span>
	                <span> <?php echo $row['estrelas'];?> </span>
	                <img class="s-24" src="Assets/Icons/Star.png" >
	                <span>, </span>
	                <img class="s-16" src="Assets/Icons/PIN.png" >
	                <span> <?php echo $row['local'];?> </span>               
	            </div>
	            <div class="col-sm-auto my-auto">
	                Por Apenas R$ 
	                <span class="text-success"> <?php echo $row['valor_estadia'];?> </span> 
	            </div>
	            <div data-function="0" data-item="0" data-type="0" class="ml-auto col-sm-auto call">
                    <a>
                        <a href="popReserva.php <?php echo $row['id']; ?>">
            	                <div class="btn btn-warning">
            	                    <span class="px-8 py-8">Reservar</span>
            	                </div>
                        </a>
                    </a>
				</div>
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



