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
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $qtd_pessoas = $_POST['qtd_pessoas'];
        

        $mysqli->query("INSERT INTO Hospede (nome, cpf, qtd_pessoas) VALUES ('$nome', '$cpf', $qtd_pessoas)") or die($mysqli->error());

        header("location: index.php");
    }

    if(isset($_GET['reserva_r'])){

        $quarto_id = $_GET['reserva_r'];
        $hospede_id = ;

        $mysqli->query("INSERT INTO Reserva(quarto_id, hospede_id, end) VALUES('$quarto_id', $hospede_id, 0)") or die($mysqli->error());

        $_SESSION['message'] = "Deletado!";
        $_SESSION['msg_type'] = "dngr";

    header("location: index.php");
}
    

