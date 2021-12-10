<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Média notas</title>
    </head>
    <body>
        <form action="" method="POST">
            Nota 1: <input type="number" name="nota1"><br>
            Nota 2: <input type="number" name="nota2"><br>
            <input type="submit">
        </form>
        <?
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $media = ($nota1+$nota2)/2;

            echo "Você tirou a média: $media";
        ?>
    </body>
</html>