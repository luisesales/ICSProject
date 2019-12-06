<?php
$inactive = 120; 
ini_set('session.gc_maxlifetime', $inactive);

session_start();

if (isset($_SESSION['message']) && (time() - $_SESSION['message'] > $inactive)) {
    session_unset();    
    session_destroy();  
}

if (isset($_SESSION['checklogin']) && (time() - $_SESSION['checklogin'] > $inactive)) {
    session_unset();    
    session_destroy();  
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$mysqli = new mysqli('localhost', 'bruno', '123', 'hotel2') or die(myslqi_error($mysqli));

$result_quarto = $mysqli->query("SELECT * FROM Quarto") or die($mysqli->error);
$result_hospede = $mysqli->query("SELECT * FROM Hospede") or die($mysqli->error);

$idindex = "";
$id_hospede = 0;
$id_quarto = "";
$id_reserva = 0;
$id_usuario = 0;

$nome = "";
$cpf = "";
$cpfa = "";

$local = "";
$valor_estadia = 0;
$estrelas = 0;

$hospede_id = 0;
$quarto_id = "";
$quarto_ida = "";

$senha = ""; 

$update = false;

if (isset($_POST['fazerreserva'])){
   $hospede_id = $_POST['hospede_id'];
   $nome = $_POST['nome'];
   $quarto_id = $_POST['quarto_id'];
   $cpf = $_POST['cpf'];

   if(strlen($cpf) == 11){

    $mysqli->query("INSERT INTO Hospede (nome, cpf) VALUES ('$nome', '$cpf' )") or die($mysqli->error);

    $mysqli->query("INSERT INTO Reserva (hospede_id, quarto_id) VALUES ($hospede_id, '$quarto_id')") or die($mysqli->error);

    echo "<script>alert('Reserva Feita com Sucesso!'); window.location.href='index.php';</script>";

}else{
    "<script>alert('Dados Incorretos'); window.location.href='index.php';</script>";
}
}


if (isset($_POST['fazerreservaexistente'])){
    $quarto_ida = $_POST['quarto_id'];
    $cpfa = $_POST['cpf'];

    $result_a = mysqli_query($mysqli, "SELECT id FROM Hospede WHERE cpf= '".$cpfa."' ");
    $rea = mysqli_fetch_row($result_a);  
    $hid = $rea[0]; 

    if($hid == null || $hid == 0){
        echo "<script>alert('CPF Incorreto'); window.location.href='index.php';</script>";
    }else{
        $mysqli->query("INSERT INTO Reserva (hospede_id, quarto_id) VALUES ($hid, '$quarto_ida')") or die($mysqli->error);
        echo "<script>alert('Reserva Feita com Sucesso!'); window.location.href='index.php';</script>";
    }
}


if(isset($_POST['loginsenha'])){
    $senha = $_POST['senha'];
    $sqlq1 = $mysqli->query("SELECT COUNT(*) FROM Usuario WHERE senha = '$senha' ") or die ($mysqli->error());
    $row = $sqlq1->fetch_array();

    if($row[0] > 0){

        header("location: admQuartos.php");

    }else{

     $_SESSION['message'] = "Senha Incorreta.";

 }
}


if(isset($_POST['endreserva'])){
    $id_reserva = $_POST['idr'];
    $mysqli->query("
        DELETE r.*
        FROM Reserva r
        WHERE id = ' ".$id_reserva." ' ") 
    or die($mysqli->error);

    echo "<script>alert('Reserva Terminada'); window.location.href='admReservas.php';</script>";
}


if (isset($_POST['criarquarto'])) {
    $id_quarto = $_POST['id_quarto'];
    $local = $_POST['local'];
    $estrelas = $_POST['estrelas'];
    $valor_estadia = $_POST['valor'];

    $mysqli->query("INSERT INTO Quarto (id, local, estrelas, valor_estadia) VALUES ('$id_quarto', '$local', $estrelas, $valor_estadia)") or die($mysqli->error);

    echo "<script>alert('Quarto Criado!'); window.location.href='admQuartos.php';</script>";
}


if(isset($_GET['editarquarto'])){
    $id = preg_replace('/\s+/', '', $_GET['editarquarto']);
    $resultadoa = $mysqli->query("SELECT * FROM Quarto WHERE id = '$id' ") or die ($mysqli->error());

    if(count($resultadoa) == 1){
        $update = true;
        $row = $resultadoa->fetch_array();
        $idindex = $row['id'];
        $local = $row['local'];
        $estrelas = $row['estrelas'];
        $valor_estadia = $row['valor_estadia'];
    }
}


if(isset($_POST['updatequarto'])){
    $id_quarto = $_POST['id_quarto'];
    $local = $_POST['local'];
    $estrelas = $_POST['estrelas'];
    $valor_estadia = $_POST['valor'];

    $mysqli->query("UPDATE Quarto SET local = '$local', estrelas = $estrelas, valor_estadia = $valor_estadia WHERE id = '$id_quarto' ") or die ($mysqli->error());

    echo "<script>alert('Quarto Atualizado!'); window.location.href='admQuartos.php';</script>";
}


?>