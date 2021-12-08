<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Mostra número</title>
    </head>
    <body>
        <form action="mostra-numero.php" method="post">
            <input type="number" name="num">
            <input type="submit">
        </form>
        <?
            $numero = $_POST["num"];
            echo "Número digitado: $numero";
        ?>
    </body>
</html>