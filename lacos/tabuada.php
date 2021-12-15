<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Tabuada
        </title>
    </head>
    <body>
        <form action="" method="POST">
            Número de 1 até 10<input type="number" name="n"><br>
            <input type="submit" name="sub">
        </form>

        <?
            $n = $_POST["n"];
            
            if(isset($_POST["sub"])){
                for($x = 1; $x <= 10; $x++){
                    echo "$n x $x: ".($n*$x)."<br>";
                }
            }
            
        ?>
    </body>
</html>