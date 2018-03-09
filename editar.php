<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Mensagens</title>
    </head>
    <body>

        <?php
            require_once('./classes/DB/Connection.php');

            $pdo = Connection::conexao();

            $id = $_GET['id'];

            $stmt = $pdo->prepare('SELECT * FROM mensagens WHERE id = :id');
            $stmt->execute(['id' => $id]);

            $mensagem = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
        ?>

        <h1>Editar Mensagem</h1>
        <?php include('menu.php') ?>

        <form action="atualizar.php" method="post">

            <input type="hidden" name="id" value="<?php echo $mensagem['id'] ?>">

            Nome: <input type="text" name="nome" value="<?php echo  $mensagem['nome'] ?>">
            <br><br><br>
            Mensagem: <textarea name="mensagem" cols="30" rows="10"><?php echo  $mensagem['mensagem'] ?></textarea>

            <br>
            <br>
            <button type="submit">Atualizar Mensagem</button>
        </form>

    </body>
</html>