<?php
    session_start();
    $db = mysqli_connect('','root', 'admin', 'sdl');

    $cpf = 00000000000;
    $nome = "";
    $qtdPessoas = 0;
    $idHospede = 0;

    $idQuarto = 0;
    $num = 0;
    $local = "";


    $pattern = '/^([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{2})$/';
    $replacement = '$1.$2.$3-$4';
    echo preg_replace($pattern, $replacement, $cpf);

    if(isset($_POST['insertH'])){
        $cpf = $_POST['cpf'];
        $nome = $_POST['nomeH'];
        $qtdPessoas = $_POST['qtdP'];
    }
    if(isset($_POST['insertQ'])){
        $local = $_POST['local'];
    }
    if(isset($_POST['insertR'])){
        $idQuarto['fkQuarto'];
        $idHospede = $_POST['fkHospede'];
    }

//  Updates:

    if (isset($_GET['updateH'])) {
        $cpf = $_GET['cpf'];
        $nome = $_GET['nomeH'];
        $qtdPessoas = $_GET['qtdP'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM Hospede WHERE id = $idHospede");

        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $matricula_aluno = $n['idH'];
            $nome_aluno = $n['nomealuno'];
            $idade = $n['idade'];
        }
    }
    if (isset($_POST['updateQ'])) {
        $matricula_aluno = $n['matriculaaluno'];
        $nome_aluno = $n['nomealuno'];
        $idade = $n['idade'];

        mysqli_query($db, "UPDATE Hospede SET nome = '$nome', cpf = '$cpf', quantidade_Pessoas = "$qtdPessoas" WHERE id=$idHospede");
        $_SESSION['message'] = "Editado!";
        header('location: index.php');
    }


    if (isset($_GET['editprofessor'])) {
        $matricula_professor = $_GET['editprofessor'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM Professor WHERE matricula_professor = $matricula_professor");

        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $matricula_professor = $n['matriculaprofessor'];
            $nome_professor = $n['nomeprofessor'];
            $materia = $n['materia'];
        }
    }
    if (isset($_POST['updateprofessor'])) {
        $matricula_professor = $n['matriculaprofessor'];
        $nome_professor = $n['nomeprofessor'];
        $materia = $n['materia'];

        mysqli_query($db, "UPDATE Professor SET matricula_professor = '$matricula_professor', nome_professor = '$nome_professor', materia = '$materia' WHERE matricula_professor=$matricula_professor");
        $_SESSION['message'] = "Editado!";
        header('location: index.php');
    }


    if (isset($_GET['editturma'])) {
        $id = $_GET['editturma'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM Turma WHERE id = $id");

        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $ano = $n['anoturma'];
            $matricula_professor = $n['fkmatriculaprofessor'];
            $matricula_aluno = $n['fkmatriculaaluno'];
        }
    }
    if (isset($_POST['updateturma'])) {
        $ano = $n['anoturma'];
        $matricula_professor = $n['fkmatriculaprofessor'];
        $matricula_aluno = $n['fkmatriculaaluno'];

        mysqli_query($db, "UPDATE Turma SET ano = '$ano', matricula_professor = '$matricula_professor', matricula_aluno = '$matricula_aluno' WHERE id=$id");
        $_SESSION['message'] = "Editado!";
        header('location: index.php');
    }


//  Deletes:

    if (isset($_GET['delaluno'])) {
        $matricula_aluno = $_GET['delaluno'];
        mysqli_query($db, "DELETE FROM Aluno WHERE matricula_aluno=$matricula_aluno");
        $_SESSION['message'] = "Deletado!";
        header('location: index.php');
    }

    if (isset($_GET['delprofessor'])) {
        $matricula_professor = $_GET['delprofessor'];
        mysqli_query($db, "DELETE FROM Professor WHERE matricula_professor=$matricula_professor");
        $_SESSION['message'] = "Deletado!";
        header('location: index.php');
    }

    if (isset($_GET['delturma'])) {
        $id = $_GET['delaluno'];
        mysqli_query($db, "DELETE FROM Turma WHERE id=$id");
        $_SESSION['message'] = "Deletado!";
        header('location: index.php');
    }
?>