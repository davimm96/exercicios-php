<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Fibonacci
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="num"><br>
            <input type="submit" name="sub">
        </form>
        <?
            if(isset($_POST["sub"])){
                $ter = $_POST["num"];
                $p=0; $u=1; $n;
                $fibo = array();

                if($ter <= 2)
                    $n = $ter-1;
                else {
                    $count = 3;

                    while($count <= $ter+1){
                        $n = $u+$p;
                        $p = $u;
                        $u = $n;
                        
                        if($count != $n){
                            //echo "$count<br>";
                            array_push($fibo, $n);
                            //var_dump($fibo);
                            $count++;
                        }else
                            break;
                    }
                }

                foreach($fibo as $f)
                    echo "$f<br>";
            }
        ?>
    </body>
</html>