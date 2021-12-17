<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <meta charset="utf-8">
        <title>
            Lançamento de dados
        </title>
        <body>
            <?

                for($x = 1; $x <= 10000; $x++){
                    $dado = rand(1,6);
                    if($dado == 1){
                        $count1++;
                        $dado1 = "Caiu $count1 vezes no lado $dado<br>";
                    }else if($dado == 2){
                        $count2++;
                        $dado2 = "Caiu $count2 vezes no lado $dado<br>";
                    }else if($dado == 3){
                        $count3++;
                        $dado3 = "Caiu $count3 vezes no lado $dado<br>";
                    }else if($dado == 4){
                        $count4++;
                        $dado4 = "Caiu $count4 vezes no lado $dado<br>";
                    }else if($dado == 5){
                        $count5++;
                        $dado5 = "Caiu $count5 vezes no lado $dado<br>";
                    }else if($dado == 6){
                        $count6++;
                        $dado6 = "Caiu $count6 vezes no lado $dado<br>";
                    }    
                }

                echo "$dado1$dado2$dado3$dado4$dado5$dado6";
            ?>
        </body>
    </head>
</html>