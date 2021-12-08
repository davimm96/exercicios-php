<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salário</title>
    </head>
    <body>
        <form action="salario.php" method="POST">
            Horas trabalhadas no mês: <input type="number" name="h"><br>
            Quantidade que ganha por hora: <input type="number" name="ht"><br>
            <input type="submit">
        </form>
        <?
            $h = $_POST["h"];
            $ht = $_POST["ht"];
            $sl = $ht * $h;

            echo "Salário: $sl"
        ?>
    </body>
</html>