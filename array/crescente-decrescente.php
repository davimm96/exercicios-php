<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Crescente e decrescente</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="n"><br>
            <input type="submit" name="cre" value="Crescente">
            <input type="submit" name="dcre" value="Decrescente">
        </form>
        <?
            $nums = array();
            $n = $_POST["n"];

            if(isset($_POST["cre"])){
                for($x=1; $x<=$n; $x++){
                    array_push($nums, $x); 
                 }

                foreach($nums as $x){
                    if($x == $n)
                        echo "$x";
                    else
                        echo "$x, ";
                }
            }

            //decrescente
            if(isset($_POST["dcre"])){
                for($x=$n; $x>=1; $x--){
                    array_push($nums, $x); 
                 }

                foreach($nums as $x){
                    if($x == 1)
                        echo "$x";
                    else
                        echo "$x, ";
                }
            }

            
        ?>
    </body>
</html>