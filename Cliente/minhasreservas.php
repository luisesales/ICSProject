<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="../Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
	<link rel="stylesheet" href="../Assets/Base/Base.css">
	<link rel="stylesheet" href="../Assets/Base/Icons.css">
	<link rel="stylesheet" href="../Assets/Module.css">
	<link rel="stylesheet" href="../Assets/Base/Colors.css">
	<meta charset="UTF-8">
	<title>ICSProject</title>
</head>

<body class="z-1">
	<?php require_once 'header.php'; ?>
	<?php $mysqli=n ew mysqli( 'localhost', 'bruno', '123', 'hotel2') or die(myslqi_error($mysqli)); if(isset($_POST[ 'cpf'])) { $cpf1=$ _POST[ 'cpf']; $result=$ mysqli->query(" SELECT r.id, r.quarto_id, q.local, q.valor_estadia FROM Reserva r INNER JOIN Quarto q ON q.id = r.quarto_id INNER JOIN Hospede h ON h.id = r.hospede_id WHERE h.cpf = '".$cpf1."'") or die($mysqli->error); } ?>
	<div data-pop="0" class="bg-pop z-2 w-100 h-100 d-none">
		<div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-25 border rounded bg-lightblue">
			<div class="row p-0">
				<h4 class="col-auto text-light">Insira o seu CPF</h4> 
			</div>
			<div class="row">
				<div class="col mt-8">
					<input type="text" class="w-100 s-32 input" id="pass">
				</div>
			</div>
			<div class="row mt-16">
				<div class="ml-auto col-sm-auto">
					<a data-function="0" data-item="0" class="search">
						<div class="btn btn-warning"><span class="px-8 py-8">Avançar</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<table class="table mt-24">
			<thead class="bg-lightblue text-light">
				<tr>
					<th class="col-auto">ID da Reserva</th>
					<th class="col-auto">Quarto</th>
					<th class="col-auto">Local</th>
					<th class="col-auto">Valor</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row=$ result->fetch_assoc()): ?>
				<tr>
					<td class="border">
						<?php echo $row[ 'id'];?>
					</td>
					<td class="border">
						<?php echo $row[ 'quarto_id'];?>
					</td>
					<td class="border">
						<?php echo $row[ 'local'];?>
					</td>
					<td class="border">R$:
						<?php echo $row[ 'valor_estadia'];?>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
	<?php require_once 'footer.php'; ?>
</body>
<script src="../Assets/Jquery/jquery-3.4.1.js"></script>
<script src="../Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
<script src="../Assets/index.js"></script>

</html>