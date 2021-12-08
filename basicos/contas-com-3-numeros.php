<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contas com 3 números</title>
    </head>
    <body>
        <form action="contas-com-3-numeros.php" method="POST">
            <input type="number" name="num1"><br>
            <input type="number" name="num2"><br>
            <input type="number" name="num3"><br>
            <input type="submit">
        </form>
        <?
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            $dpms = ($num1 * 2) + ($num / 2);
            $stpt = ($num1 * 3) + $num3;
            $cubo = $num3*$num3*$num3;

            echo "
                    O produto do dobro do primeiro com metade do segundo: $dpms<br>
                    A soma do triplo do primeiro com o terceiro: $stpt<br>
                    O terceiro elevado ao cubo: $cubo
                ";
        ?>
    </body>
</html>