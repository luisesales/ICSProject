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

<body class="z-1">
    <?php require_once 'headerlogado.php'; ?>
    <?php require_once 'process.php'; ?>
    <?php 
    $mysqli = new mysqli('localhost', 'bruno', '123', 'hotel2') or die(myslqi_error($mysqli));
    $result_quarto = $mysqli->query("SELECT * FROM Hospede") or die($mysqli->error);
    ?>
    <div class="container-fluid mt-24">
        <table class="table">
            <thead class="bg-lightblue text-light">
                <tr>
                    <th class="col-auto">Código</th>
                    <th class="col-auto">Nome</th>
                    <th class="col-auto">CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result_quarto->fetch_assoc()): ?>
                    <tr>
                        <td class="border">
                            <?php echo $row['id'];?>
                        </td>
                        <td class="border">
                            <?php echo $row['nome'];?>
                        </td>
                        <td class="border">
                            <?php echo $row['cpf'];?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php require_once 'footer.php'; ?>
</body>
<script src="Assets/Jquery/jquery-3.4.1.js"></script>
<script src="Assets/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
<script src="Assets/index.js"></script>

</html>