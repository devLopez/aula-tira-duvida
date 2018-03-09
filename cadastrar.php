<?php

    require_once('./classes/DB/Connection.php');
    require_once('./classes/Http/Redirect.php');

    $pdo = Connection::conexao();

    try {
        $nome       = $_POST['nome'];
        $mensagem   = $_POST['mensagem'];
        $telefone   = $_POST['telefone'];

        $stmt = $pdo->prepare('INSERT INTO mensagens(nome, mensagem, telefone) VALUES (:nome, :mensagem, :telefone)');
        $stmt->execute([
            'nome'      => $nome,
            'mensagem'  => $mensagem,
            'telefone'  => $telefone
        ]);

        Redirect::to('cadastradas.php');

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

