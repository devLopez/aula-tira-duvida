<?php

class Connection
{
    public static function conexao()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=mensagens', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}