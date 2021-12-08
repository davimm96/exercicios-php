<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soma</title>
    </head>
    <body>
        <form action="soma.php" method="post">
            <input type="number" name="num1"><br>
            <input type="number" name="num2"><br>
            <input type="submit">
        </form>

        <?
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            echo "Soma: ",$num1+$num2
        ?>
    </body>
</html>