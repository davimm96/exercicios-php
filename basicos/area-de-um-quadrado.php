<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área de um quadrado</title>
    </head>
    <body>
        <form action="area-de-um-quadrado.php" method="POST">
            <input type="number" name="num"><br>
            <input type="submit">
        </form>

        <?
            $num = $_POST["num"];
            $result = $num * $num;

            echo "Área de um quadrado: $result";
        ?>
    </body>
</html>