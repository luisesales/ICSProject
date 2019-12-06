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

<body class="z-1 overflow-auto"></body>
<?php require_once 'headerlogado.php'; ?>
<?php require_once 'process.php'; ?>
<div data-pop="1" class="bg-pop z-2 w-100 h-100 d-block">
	<div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-50 border bg-lightblue rounded">
		<div class="row">
			<h4 class="col-auto order-sm-1 order-2 text-light">Insira os dados a Seguir</h4>
			<button href="admQuartos.php" type="button" class="close col-auto ml-auto order-sm-2 order-1 mr-8 text-light" aria-label="Close"> <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="process.php" method="POST">
			<div class="row text-light">
				<div class="col-lg-3 col-sm-4 mt-8">
					<h5>ID</h5>
					<?php if($update==t rue): ?>
					<input type="text" class="w-100 s-32 input" readonly="readonly" name="id_quarto" value="<?php echo $idindex; ?>">
					<?php else: ?>
					<input type="text" class="w-100 s-32 input" name="id_quarto" value="<?php echo $idindex; ?>">
					<?php endif; ?>
				</div>
				<div class=" col-12 mt-8">
					<h5>Local</h5>
					<input type="text" class="w-100 s-32 input" name="local" value="<?php echo $local; ?>">
				</div>
				<div class=" col-12 mt-8">
					<h5>Estrelas</h5>
					<input type="number" class="w-100 s-32 input" min="1" max="5" name="estrelas" value="<?php echo $estrelas; ?>">
				</div>
				<div class=" col-12 mt-8">
					<h5>Valor</h5>
					<input type="number" step="0.01" min="0" class="w-100 s-32 input" name="valor" value="<?php echo $valor_estadia; ?>">
				</div>
			</div>
			<div class="row mt-16">
				<?php if($update==t rue): ?>
				<div class="ml-auto col-sm-auto">
					<button type="submit" class="btn btn-warning" name="updatequarto">Salvar</button>
				</div>
				<?php else: ?>
				<div class="ml-auto col-sm-auto">
					<a href="admQuartos.php">
						<button type="submit" class="btn btn-warning" name="criarquarto">Criar</button>
					</a>
				</div>
				<?php endif; ?>
			</div>
		</form>
	</div>
</div>
<?php require_once 'footer.php'; ?>

</html>