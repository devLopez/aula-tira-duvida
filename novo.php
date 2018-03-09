<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Mensagens</title>
    </head>
    <body>

        <h1>Nova Mensagem</h1>

        <?php include('menu.php') ?>

        <form action="cadastrar.php" method="post">

            Nome: <input type="text" name="nome">
            <br><br><br>
            Mensagem: <textarea name="mensagem" cols="30" rows="10"></textarea>

            <br>
            <br>
            <button type="submit">Salvar Mensagem</button>
        </form>

    </body>
</html>