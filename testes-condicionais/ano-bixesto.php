<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="widt=device-width, initial-scale=1.0">
        <title>Ano bixesto</title>
    </head>
    <body>
        <form action="" method="POST">
            Ano: <input type="number" name="n"><br>
            <input type="submit">
        </form>
        <?
            $ano = $_POST["n"];

            if($ano%400 == 0){
                echo "É bixesto";
            }else {
                if($ano%4==0 && $ano%100!=0)
                    echo "É bixesto";
                else
                    echo "Não é bixesto";
            }

            
        ?>
    </body>
</html>