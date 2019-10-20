<?php
    session_start();
    $db = mysqli_connect('','root', 'admin', 'sdl');

    $matricula_aluno = 0;
    $matricula_professor = 0;
    $nome_aluno = "";
    $nome_professor = "";
    $idade = 0;
    $materia = "";
    $ano = "";
    $id = 0;

    if(isset($_POST['salvaraluno'])){
        $matricula_aluno = $_POST['matriculaaluno'];
        $nome_aluno = $_POST['nomealuno'];
        $idade = $_POST['idade'];
    }
    if(isset($_POST['salvarprofessor'])){
        $matricula_professor = $_POST['matriculaprofessor'];
        $nome_professor = $_POST['nomeprofessor'];
        $materia = $_POST['materia'];
    }
    if(isset($_POST['salvarturma'])){
        $ano = $_POST['anoturma'];
        $matricula_professor = $_POST['fkmatriculaprofessor'];
        $matricula_aluno = $_POST['fkmatriculaaluno'];
    }

//  Updates:

    if (isset($_GET['editaluno'])) {
        $matricula_aluno = $_GET['editaluno'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM Aluno WHERE matricula_aluno = $matricula_aluno");

        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $matricula_aluno = $n['matriculaaluno'];
            $nome_aluno = $n['nomealuno'];
            $idade = $n['idade'];
        }
    }
    if (isset($_POST['updatealuno'])) {
        $matricula_aluno = $n['matriculaaluno'];
        $nome_aluno = $n['nomealuno'];
        $idade = $n['idade'];

        mysqli_query($db, "UPDATE Aluno SET matricula_aluno = '$matricula_aluno', nome_aluno = '$nome_aluno', idade = '$idade' WHERE matricula_aluno=$matricula_aluno");
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