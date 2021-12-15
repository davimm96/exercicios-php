<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Ímpares 1-50</title>
    </head>
    <body>
        <?
            for($x = 1; $x <= 50; $x++){
                if($x%2 != 0)
                    echo "$x<br>";
            }
        ?>
    </body>
</html>