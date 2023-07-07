<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $duvida = $_POST['inquiry'];

    //conexão
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gerenciador";

    $conn = new mysqli($servername, $username, $password, $dbname);

    //verifica conexão

    if($conn->connect_error){
        die("falha na conexão do db:". $conn->connect_error);
    }
    $sql = "INSERT INTO post 
    (responsavel, conteudo, resolvido, id_user) 
    VALUES 
    ('$nome','$duvida','0','1')";

    if($conn->query($sql) === TRUE){
        echo "Dados adicionados, confira o db";
    }
    else{
        echo "deu ruim";
    }
    $conn->close();

}