<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Converter farenheit celcius</title> 
    </head>
    <body>
        <form action="converter-farenheit-celcius.php" method="POST">
            <input type="number" name="num">
            <input type="submit">
        </form>

        <?
            $num = $_POST["num"];
            $convert = ($num - 32) / 1.8000;

            echo "$convert celcius";
        ?>
    </body>
</html>