<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Número primo
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="num"><br>
            <input type="submit" name="sub">
        </form>

        <?
            if(isset($_POST["sub"])){
                $num = $_POST["num"];
                $divisores = 0;
                $res;


                for($x = 1; $x <= $num; $x++){
                   for($count = 1; $count <= $x; $count++){
                        if($x % $count == 0){
                            $divisores++;
                            echo "$x é divizivel por $count<br>";
                        }
                    }
                        
                    if($divisores == 2){
                        $res = "É primo<br><br>";
                        $divisores = 0;
                    }else {    
                        $res = "Não é primo<br><br>";
                        $divisores = 0;
                    }

                    echo $res;
                }  
            }
            
        ?>
    </body>
</html> 