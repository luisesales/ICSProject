<?php
    $mysqli = new mysqli('localhost', 'bruno', '123', 'Hotel') or die(myslqi_error($mysqli));

    $id_hospede = 0;
    $id_quarto = "";
    $id_reserva = 0;
    $id_usuario = 0;

    $nome = "";
    $cpf = "";
    $qtd_pessoas = 0;

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

    
    

