<?php

require_once('./classes/DB/Connection.php');
require_once('./classes/Http/Redirect.php');

$pdo = Connection::conexao();

try {

    $id = $_GET['id'];

    $stmt = $pdo->prepare('DELETE FROM mensagens WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    Redirect::to('cadastradas.php');

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}