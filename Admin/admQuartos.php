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
	<?php require_once 'headerlogado.php'; ?>
	<?php require_once 'process.php'; ?>
	<?php $mysqli=n ew mysqli( 'localhost', 'bruno', '123', 'hotel2') or die(myslqi_error($mysqli)); $result_quarto=$ mysqli->query("SELECT * FROM Quarto") or die($mysqli->error); ?>
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
				<?php while($row=$ result_quarto->fetch_assoc()): ?>
				<tr>
					<td class="border">
						<?php echo $row[ 'id'];?>
					</td>
					<td class="border">
						<?php echo $row[ 'local'];?>
					</td>
					<td class="border">
						<?php echo $row[ 'estrelas'];?>
					</td>
					<td class="border">R$:
						<?php echo $row[ 'valor_estadia'];?>
						<div class="tri ml-auto"></div>
					</td>
				</tr>
				<tr data-pop="0" class="sub bg-secondary">
					<td colspan="4" class="border">
						<div class="row mx-0">
							<div class="col-auto">
								<a href="popAddQuarto.php?editarquarto= <?php echo $row['id']; ?>">
									<div class="btn btn-primary"> <span class="px-8 py-8">Editar</span>
									</div>
								</a>
							</div>
						</div>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
		<div class="row mt-32">
			<div data-function="0" data-item="0" class="ml-auto col-auto call">
				<a href="popAddQuarto.php">
					<div class="btn btn-warning"><span class="px-8 py-8">Adicionar Quarto</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<?php require_once 'footer.php'; ?>
</body>
<script src="../Assets/Jquery/jquery-3.4.1.js"></script>
<script src="../Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
<script src="../Assets/index.js"></script>

</html>