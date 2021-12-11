<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aumento salário</title>
    </head>
    <body>
        <form action="" method="POST">
            Salário: <input type="text" name="sl"><br>
            <input type="submit">
        </form>
        <?
            $sl = floatval($_POST["sl"]);
            $total; $vlrAumnt; $percAumnt; 

            if(is_numeric($sl) == true){
                if($sl <= 280.00 && $sl >= 1){
                    $vlrAumnt = $sl * 0.20; 
                    $total =  $vlrAumnt+$sl;
                    $percAumnt = "20%";
                }else if($sl <= 700.00 && $sl > 280.00){
                    $vlrAumnt = $sl * 0.15; 
                    $total = $vlrAumnt+$sl;
                    $percAumnt = "15%";
                }else if($sl <= 1500.00 && $sl > 700.00){
                    $vlrAumnt = $sl * 0.10; 
                    $total = $vlrAumnt+$sl;
                    $percAumnt = "10%";
                }else if($sl > 1500.00){
                    $vlrAumnt = $sl * 0.05;
                    $total = $vlrAumnt+$sl;
                    $percAumnt = "5%";
                }

                echo "
                        O salário antes do reajuste: R$ $sl<br>
                        O percentual de aumento aplicado: $percAumnt<br>
                        O valor do aumento: R$ $vlrAumnt<br>
                        O novo salário, após o aumento: R$ $total<br>
                    ";
            }

            /**
             *    salários até R$ 280,00 (incluindo) : aumento de 20%
             *  salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
             *   salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
             *   salários de R$ 1500,00 em diante : aumento de 5% Após o aumento ser realizado, informe na tela:
             *   o salário antes do reajuste;
             *   o percentual de aumento aplicado;
             *   o valor do aumento;
             *   o novo salário, após o aumento.'
             */
        ?>
    </body>
</html>