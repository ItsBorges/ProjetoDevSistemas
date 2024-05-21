<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "nome_do_banco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $nome_cliente = $_POST['nome_cliente'];
    $senha = $_POST['senha'];
    $tipo_hamburguer = $_POST['tipo_hamburguer'];

    $sql = "INSERT INTO pedidos (nome_cliente, senha, tipo_hamburguer) VALUES ('$nome_cliente', '$senha', '$tipo_hamburguer')";

    if ($conn->query($sql) === TRUE) {
        echo "Pedido realizado com sucesso!";
    } else {
        echo "Erro ao realizar o pedido: " . $conn->error;
    }

    $conn->close();
}
?>

