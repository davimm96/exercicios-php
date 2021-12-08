<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Média</title>
    </head>
    <body>
        <form action="media.php" method="post">
            <input type="number" name="num1"><br>
            <input type="number" name="num2"><br>
            <input type="number" name="num3"><br>
            <input type="submit"> 
        </form>

        <?
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            $soma = $num1+$num2+$num3;
            $media = $soma/3;

            echo "Média: $media";
        ?>
    </body>
</html>