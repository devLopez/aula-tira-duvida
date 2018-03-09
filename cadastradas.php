<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Mensagens</title>
    </head>
    <body>

        <h1>Mensagens Cadastradas</h1>

        <?php include('menu.php') ?>

        <?php
            require_once('./classes/DB/Connection.php');

            $pdo = Connection::conexao();

            $consulta = $pdo->query('SELECT * FROM mensagens ORDER BY id DESC');
        ?>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['telefone'] ?></td>
                    <td><?php echo $linha['mensagem'] ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $linha['id'] ?>">Editar</a>
                        <a href="excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>

    </body>
</html>