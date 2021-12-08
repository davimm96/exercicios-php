<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="vewport" content="width=device-width, initial-scale=1.0">
        <title>Converter metro centímetro</title>
    </head>
    <body>
        <form action="converter-metro-centimetro.php" method="POST">
            <input type="number" name="num">
            <input type="submit">
        </form>

        <?
            $num = $_POST["num"];
            $convrt = $_POST["num"]*100;

            echo "$convrt centímetros";
        ?>
    </body>    
<html>