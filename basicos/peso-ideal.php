<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peso ideal</title>
    </head>
    <body>
        <form action="peso-ideal.php" method="POST">
            Altura: <input type="text" name="num"><br>
            <input type="submit">
        </form>
        <?
            //(72.7*altura) - 58
            echo "Peso ideal: ",(72.7 * $_POST["num"])-58;
        ?>
    </body>
</html>