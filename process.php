    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $mysqli = new mysqli('localhost', 'bruno', '123', 'hotel') or die(myslqi_error($mysqli));

    $result_quarto = $mysqli->query("SELECT * FROM Quarto") or die($mysqli->error);
    $result_hospede = $mysqli->query("SELECT * FROM Hospede") or die($mysqli->error);

    $id_hospede = 0;
    $id_quarto = "";
    $id_reserva = 0;
    $id_usuario = 0;

    $nome = "";
    $cpf = "";
    $qtd_pessoas = 1;

    $local = "";
    $valor_estadia = 0;
    $estrelas = 0;

    $accept = false;
    $end = false;
    $hospede_id = 0;
    $quarto_id = "";

    $user = "";
    $senha = ""; 

    $update = false;

    if (isset($_POST['reservar'])){
         $quarto_id = $_POST['quarto_id'];
         $hospede_id = $_POST['hospede_id'];
         $nome = $_POST['nome'];
         $cpf = $_POST['cpf'];
         $qtd_pessoas = $_POST['qtd_pessoas'];
        

         $mysqli->query("INSERT INTO Hospede (nome, cpf, qtd_pessoas) VALUES ('$nome', '$cpf', $qtd_pessoas)") or die($mysqli->error());

        $mysqli->query("INSERT INTO Reserva (hospede_id, quarto_id, end) VALUES ($hospede_id, '$quarto_id', 0)") or die($mysqli->error());



         header("location: index.php");
     }


     if(isset($_GET['editarquarto'])){
        $id_quarto = $_GET['editarquarto'];

        $resultado = $mysqli->query("SELECT * FROM Quarto WHERE id = $id_quarto") or die ($mysqli->error());

        if(count($resultado)==1){
            $update = true;
            $row = $resultado->fetch_array();
            $id_quarto = $row['id'];
            $local = $row['local'];
            $valor_estadia = $row['valor_estadia'];
            $estrelas = $row['estrelas'];
        }
    }

    if(isset($_POST['update'])){
        $id_quarto = $_POST['id'];
        $local= $_POST['nome'];
        $valor_estadia = $_POST['valor_estadia'];
        $estrelas = $_POST['estrelas'];

        $mysqli->query("UPDATE Quarto SET local = '$local', valor_estadia = $valor_estadia, estrelas = $estrelas WHERE id = $id_quarto") or die ($mysqli->error());


        header("location: admQuartos.php");
    }




