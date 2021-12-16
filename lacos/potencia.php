<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Potência
        </title>
    </head>
    <body>
        <form action="" method="POST">
            Base: <input type="number" name="b"><br>
            Expoente: <input type="number" name="e"><br>
            <input type="submit" name="sub">
        </form>

        <?
            $p;

            if(isset($_POST["sub"])){
                $b = (int)$_POST["b"];
                $e = (int)$_POST["e"];

                for($resultado=1, $count=1; $count<=$e; $count++){
                    $resultado *= $b;
                }
                    
                    
                echo "$resultado";

             
                     
            }
        ?>
    </body>
</html>