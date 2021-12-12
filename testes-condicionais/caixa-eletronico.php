<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Caixa eletrônica</title>
    </head>
    <body>
        <form action="" method="POST">
            Quantidade de notas que você quer sacar: <input type="number" name="n"><br>
            <input type="submit">
        </form>
        <?
            $n = $_POST["n"];
            $nN = (int)$n;
            $terc = (int)$n[2];
            $segu = (int)$n[1];
            $pri = (int)$n[0];
            $resp;
            
            echo "Dinhero retirado: R$ $n<br><br>";

            switch(strlen($n)){
                case 1:
                    if($n > 5){
                        $resp .= "Uma nota de R$ 5<br>";
                        for($x = 1; $x <= $nN-5; $x++)
                            $resp .= "Uma nota de R$ 1<br>";
                    }else if($n == 5)
                        $resp .= "Uma nota de R$ 5<br>";
                    else if($n < 5 && $n > 0){
                        for($x = 1; $x <= $nN; $x++)
                            $resp .= "Uma nota de R$ 1<br>";
                    }
                break;
                case 2:
                if($pri*10 < 50){
                    for($x = 1; $x <= $pri; $x++)
                        $resp .= "Uma nota de R$ 10<br>";
                }else if($pri*10 == 50)
                    $resp .= "Uma nota de R$ 50<br>";
                else if($pri*10 > 50){
                    $resp .= "Uma nota de R$ 50<br>";
                    for($x = 1; $x <= $pri-5; $x++)
                        $resp .= "Uma nota de R$ 10<br>";
                }

                if($segu < 5 && $segu > 0){
                    for($x = 1; $x <= $segu; $x++)
                        $resp .= "Uma nota de R$ 1<br>";
                }else if($segu == 5)
                    $resp .= "Uma nota de R$ 5<br>";
                else if($segu > 5){
                    $resp .= "Uma nota de R$ 5<br>";
                    for($x = 1; $x <= $segu-5; $x++)
                        $resp .= "Uma nota de R$ 1<br>";
                }
            break;
            case 3:
                for($x = 1; $x <= $pri; $x++)
                    $resp .= "Uma nota de R$ 100<br>";

                if($segu*10 < 50){
                    for($x = 1; $x <= $segu; $x++)
                        $resp .= "Uma nota de R$ 10<br>";
                }else if($segu*10 == 50)
                    $resp .= "Uma nota de R$ 50<br>";
                else if($segu*10 > 50){
                    $resp .= "Uma nota de R$ 50<br>";
                    for($x = 1; $x <= $segu-5; $x++)
                        $resp .= "Uma nota de R$ 10<br>"; 
                }

                if($terc < 5 && $terc > 0){
                    for($x = 1; $x <= $terc; $x++)
                        $resp .= "Uma nota de R$ 1<br>";
                }else if($terc == 5)
                    $resp .= "Uma nota de R$ 5<br>";
                else if($terc > 5){
                    $resp .= "Uma nota de R$ 5<br>";
                    for($x = 1; $x <= $terc-5; $x++)
                        $resp .= "Uma nota de R$ 1<br>";
                }
            break;
            default:
                $resp = "Digite um valor com no máximo 3 caracteres";
            }
            
            echo $resp;
        ?>
    </body>
</html>