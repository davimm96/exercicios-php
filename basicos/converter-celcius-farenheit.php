<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Converter Celcius Farenheit</title>
    </head>
    <body>
        <form action="converter-celcius-farenheit.php" method="POST">
            <input type="number" name="num"><br>
            <input type="submit">
        </form>
        <?
            //(c * 1.8) + 32
            echo ($_POST["num"] * 1.8)+ 32;
        ?>
    </body>
</html>