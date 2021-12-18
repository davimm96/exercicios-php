<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            N-nésima linha
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="numb"><br>
            <input type="submit" name="submit">
        </form>
        <?
            $n = $_POST["numb"];

            imprime($n);
            function imprime($n){
                for($linha=1; $linha<=$n; $linha++){
                    for($coluna=1; $coluna<=$linha; $coluna++)
                        echo "$linha ";

                    echo "<br>";
                }
            }
        ?>
    </body>

</html>