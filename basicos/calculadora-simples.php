<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora simples</title>
    </head>
    <body>
        <form action="calculadora-simples.php" method="post">
            <input type="number" name="num1">
            <input type="number" name="num2">
            <input type="submit">
        </form>

        <?php 
            echo "
                    Menos: ",$_POST["num1"] - $_POST["num2"],"<br>
                    Mais: ",$_POST["num1"] + $_POST["num2"],"<br>
                    Divisão: ",$_POST["num1"] / $_POST["num2"],"<br>
                    Vezes: ",$_POST["num1"] * $_POST["num2"]," 
                ";
        ?>
    </body>
</html>