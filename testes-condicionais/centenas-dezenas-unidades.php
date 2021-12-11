<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Centenas, dezenas e unidades
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="n">
            <input type="submit">
        </form>
        <?
            $n = $_POST["n"];
            $res;

            if(strlen($n) == 1)
                $res = "$n[0] unidades";
            else if(strlen($n) == 2)
                $res = "$n[0] unidades, $n[1] dezenas";
            else if(strlen($n) == 3)
                $res = "$n[0] unidades, $n[1] dezenas, $n[2] centenas";
            else
                $res = "Digite um valor com no máximo 3 números";   
                
            echo $res;
        ?>
    </body>
</html>