<!DOCTYPE htlm>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-9">
        <title>
            Fatorial
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="n"><br>
            <input type="submit" name="sub">
        </form>

        <?
            if(isset($_POST["sub"])){
                $n = $_POST["n"];
                $result; 
                $p2;
                $p;

                for($x = $n-1; $x >= 1; $x--){
                    if($x == $n-1){
                        $p .= "$x .";
                        $p2 = $p+1;
                    }else if($x > 1)
                        $p .= "$x .";
                    else
                        $p .= $x;
                    
                    $result = ($n *= $x).("<br>");
                }
            
                echo "$p2 .$p = $result";
            }
        ?>
    </body>
</html>