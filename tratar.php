<?php
    var_dump($_POST);
    $nome = $_POST['nome_completo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    try {
        include_once('conexao.php');

        $consulta = $pdo->prepare("INSERT INTO usuario
        (nome_completo, email, senha)
        VALUES
        (:nome_completo, :email, :senha)");

$consulta->bindValue(":nome_completo", $nome);
$consulta->bindValue(":email", $email);
$consulta->bindValue(":senha", $senha);
$consulta->execute();

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }

    header('location: paginainicial.php');
?>