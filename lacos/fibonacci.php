<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Fibonacci
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="termo">
            <input type="submit" name="sub">
        </form>
        <?
            if(isset($_POST["sub"])){
                $termo = $_POST["termo"];
                $penultimo = 0;
                $ultimo = 1;
                $res;
                $n;

                if($termo <= 2){
                    $n = $termo -1;
                    $res = "Digite um valor maior que 2";
                    echo $res;
                }else{
                    for($count = 3; $count <= $termo+1; $count++){
                        $n = $ultimo + $penultimo;
                        $penultimo = $ultimo;
                        $ultimo = $n;
                        $res = "$n<br>";
                        echo $res;
                    }
                    //echo $n;
                }
            }
            
        ?>
    </body>
</html>