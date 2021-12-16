<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Aumento salarial
        </title>
    </head>
    <body>

        <p>Esse funcionário foi contratado em 1995, com salário inicial de R$ 1.000,00;</p>
        <p>Em 1996 recebeu aumento de 1,5% sobre seu salário inicial;</p>
        <p>A partir de 1997 (inclusive), os aumentos salariais sempre correspondem ao dobro do percentual do 
        ano anterior. Faça um programa que determine o salário atual desse funcionário. Após concluir isto,
        altere o programa permitindo que o usuário digite o salário inicial do funcionário.</p>
        
        <form action="" method="POST">
            Salario base: <input type="number" name="n"><br>
            <input type="submit" name="sub">
        </form>

        <?
            if(isset($_POST["sub"])){
                $salario = (float)$_POST["n"];
                $anoAtual = (float)date("Y");
                //$bonus = (float)0;

                for($anoBase = 1995; $anoBase <= $anoAtual; $anoBase++){
                    if($anoBase == 1996){
                        $bonus = (float)0.015;
                    }else {
                        $bonus *= 2;
                    }
                }
                $salario = ($salario * $bonus)+$salario;
                
                //echo $bonus;
                echo number_format($salario, 2, ',', '.');

                //Esse funcionário foi contratado em 1995, com salário inicial de R$ 1.000,00;
                //Em 1996 recebeu aumento de 1,5% sobre seu salário inicial;
                //A partir de 1997 (inclusive), os aumentos salariais sempre correspondem ao dobro do percentual do 
                //ano anterior. Faça um programa que determine o salário atual desse funcionário. Após concluir isto,
                // altere o programa permitindo que o usuário digite o salário inicial do funcionário.
            }
        ?>
    </body>
</html>