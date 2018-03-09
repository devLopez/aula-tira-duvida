<?php

    require_once('./classes/DB/Connection.php');
    require_once('./classes/Http/Redirect.php');

    $pdo = Connection::conexao();

    try {
        $nome       = $_POST['nome'];
        $mensagem   = $_POST['mensagem'];

        $stmt = $pdo->prepare('INSERT INTO mensagens(nome, mensagem) VALUES (:nome, :mensagem)');
        $stmt->execute([
            'nome'      => $nome,
            'mensagem'  => $mensagem
        ]);

        Redirect::to('cadastradas.php');

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

