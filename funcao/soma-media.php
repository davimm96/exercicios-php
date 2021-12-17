<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Soma e média
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="n1"><br>
            <input type="number" name="n2"><br>
            <input type="submit" name="sub">
        </form>

        <?
            if(isset($_POST["sub"])){
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];

                function soma($a,$b){
                    return $a+$b;
                }

                function media(){
                    $soma = soma($GLOBALS["n1"], $GLOBALS["n2"]);
                    $media = $soma/2;
                    return "Soma: $soma<br>Média: $media";
                }

                echo media();
            }
        ?>
    </body>
</html>