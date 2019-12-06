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
	<?php require_once 'header2.php'; ?>
	<div data-pop="1" class="bg-pop z-2 w-100 h-100 d-block">
		<div class="popup z-3 pt-8 pb-16 px-16 mx-auto text-dark w-50 border bg-lightblue rounded">
			<div class="row mx-0 text-light">
				<h4 class="col-auto order-sm-1 order-2 pt-2 px-0">Insira os dados a Seguir</h4>
				<button href="index.php" class="close text-light col-auto ml-auto order-sm-2 order-1" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php $mysqli=n ew mysqli( 'localhost', 'bruno', '123', 'hotel2') or die(myslqi_error($mysqli)); $result_quarto=$ mysqli->query("SELECT * FROM Quarto") or die($mysqli->error); $result_hospede = $mysqli->query("SELECT * FROM Hospede") or die($mysqli->error); $sql_hospede = mysqli_query($mysqli, "SELECT * FROM Hospede ORDER BY id DESC LIMIT 1"); $rra = mysqli_fetch_row($sql_hospede); ?>
			<?php if(isset($_POST[ 'idquartoa'])){ $idquartoa=p reg_replace( '/\s+/', '', $_POST[ 'idquartoa']); } ?>
			<form action="process.php" method="POST">
				<div class="row mt-16 mx-0 w-100 text-light">
					<div class="row mx-0 w-100">
						<div class="col-sm-auto col-12 pl-0 mx-0 mt-8">
							<h5>Quarto</h5>
							<input name="quarto_id" type="text" readonly="readonly" class="w-100 s-32 input" value="<?php echo $idquartoa; ?>">
						</div>
						<div class="col-sm-auto col-12 pl-0 mt-8">
							<h5>Seu CPF</h5>
							<input type="text" class="w-100 s-32 input" value="<?php echo $cpfa; ?>" maxlength="11" name="cpf">
						</div>
					</div>
				</div>
				<div class="row mt-16 w-100 ">
					<a href="index.php">
						<button class="ml-auto btn btn-warning" type="submit" name="fazerreservaexistente">Reservar</button>
					</a>
				</div>
			</form>
		</div>
	</div>
	</div>
	<?php require_once 'footer.php'; ?>
</body>

</html>