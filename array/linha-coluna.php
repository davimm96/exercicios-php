<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Linha coluna
        </title>
    </head>
    <body>
        <form action="" method="POST">
            Colunas: <input type="number" name="col"><br>
            Linhas: <input type="number" name="lin"><br>
            <input type="submit" name="sub">
        </form>
        <?
            if(isset($_POST["sub"])){
                $col = $_POST["col"];
                $lin = $_POST["lin"];
                $numb = array();

                for($x=1; $x<=$col; $x++){
                    array_push($numb, $x);
                }

                for($x=1; $x<=$lin; $x++){
                    foreach($numb as $n){
                        if($n == $col)
                            echo "$n";
                        else
                            echo "$n, ";
                    }
                    echo "<br>";
                }
                

            }
        ?>
    </body>
</html>