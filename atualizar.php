<?php

require_once('./classes/DB/Connection.php');
require_once('./classes/Http/Redirect.php');

$pdo = Connection::conexao();

try {
    $nome       = $_POST['nome'];
    $mensagem   = $_POST['mensagem'];
    $telefone   = $_POST['telefone'];
    $id         = $_POST['id'];

    $stmt = $pdo->prepare('UPDATE mensagens SET nome = :nome, mensagem = :mensagem, telefone = :telefone WHERE id = :id');
    $stmt->execute([
        'nome'      => $nome,
        'mensagem'  => $mensagem,
        'telefone'  => $telefone,
        'id'        => $id
    ]);

    Redirect::to('cadastradas.php');

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}