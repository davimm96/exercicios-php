<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Taxa de crescimento
        </title>
    </head>
    <body>
        <form action="" method="POST">
            Habitantes do país A: <input type="number" name="aHabit">
            Taxa de crescimento do país A: <input type="number" name="aTaxa"><br>
            Habitantes do país B: <input type="number" name="bHabit">
            Taxa de crescimento do país B: <input type="number" name="bTaxa"><br>
            Quantidade de anos: <input type="number" name="anos"><br>
            <input type="submit">
        </form>
        <div>
            <?res()?>
        </div>
        <?
            function res(){
                $anos = $_POST["anos"];

                $aHabit = $_POST["aHabit"];
                $aTaxa = $_POST["aTaxa"];
                if($aTaxa <= 9){
                    $aTaxa = "0.0".($aTaxa);
                    $aTaxaf = (float)$aTaxa;
                }else if($aTaxa > 9 && $aTaxa < 100){
                    $aTaxa = "0.".($aTaxa);
                    $aTaxaf = (float)$aTaxa;
                }else if($aTaxa >= 100){
                    $aTaxaf = (int)$aTaxa;
                }

                $bHabit = $_POST["bHabit"];
                $bTaxa = $_POST["bTaxa"];
                if($bTaxa <= 9){
                    $bTaxa = "0.0".($bTaxa);
                    $bTaxaf = (float)$bTaxa;
                }else if($bTaxa > 9 && $bTaxa < 100){
                    $bTaxa = "0.".($bTaxa);
                    $bTaxaf = (float)$bTaxa;
                }else if($bTaxa >= 100){
                    $bTaxaf = (int)$bTaxa;
                }
                    
                $res;
               
                for($x = 1; $x <= $anos; $x++){
                    $bHabit = ($bHabit * $bTaxaf)+$bHabit;
                    $aHabit = ($aHabit * $aTaxaf)+$aHabit;
                }

                if($aHabit > $bHabit){
                    $res = "
                            Pais A ganhou com ".((int)$aHabit)." habitantes<br>
                            Pais B perdeu com ".((int)$bHabit)." habitantes<br>
                        ";
                }else if($bHabit > $aHabit){
                    $res = "
                            Pais B ganhou com ".((int)$bHabit)." habitantes<br>
                            Pais A perdeu com ".((int)$aHabit)." habitantes<br>
                        ";
                }

                echo $res;
               
            }
           
        ?>
    </body>
</html>