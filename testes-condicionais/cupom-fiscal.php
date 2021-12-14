<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Cupom fiscal
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="kg" placeholder="KG"><br>
            <select name="selPag">
                <option value="Dinheiro">Dinheiro</option>
                <option value="Cartão Tabajara">Cartão tabajara</option>
            </select>
            <select name="selCarn">
                <option value="Filé">Filé</option>
                <option value="Alcatra">Alcatra</option>
                <option value="Picanha">Picanha</option>
            </select>
            <input type="submit" name="sub" value="Comprar">
        </form>
        <div id="res">
            <? res();  ?>
        </div>

        <? 

            function res(){
                $selPag = $_POST["selPag"];
                $selCarn = $_POST["selCarn"];
                $kg = $_POST["kg"];
                
                //Filé
                if($selCarn == "Filé"){
                    $tipo = "$kg Kg de Filé<br>";
                    if($selPag == "Cartão Tabajara"){
                        if($kg <5 && $kg >0){
                            $vlrf = ($kg * 4.90) - (($kg * 4.90)*0.05);
                            $vlrf = "Valor final: R$ $vlrf <br>";
                            $desc = "Desconto de R$ 4,90 por Kg por comprar abaixo de 5 Kg<br>Desconto de 5% por comprar com o cartão Tabajara<br>";
                        }else if($kg >5){
                            $vlrf = ($kg * 5.80) - (($kg * 5.80)*0.05);
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de 5% por comprar com o cartão Tabajara<br>";
                        }else {
                            $vlrf = "Digite um valor válido";
                            $desc = "";
                            $tipo = "";
                        }
                        
                    }else{
                        if($kg <5 && $kg >0){
                            $vlrf = $kg*4.90;
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de R$ 4,90 por Kg por comprar abaixo de 5 Kg<br>";
                        }else if($kg >5){
                            $vlrf = $kg*5.80;
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "";
                        }else {
                            $vlrf = "Digite um valor válido";
                            $desc = "";
                            $tipo = "";
                        }
                    }
                }
                
                //Alcatra
                if($selCarn == "Alcatra"){
                    $tipo = "$kg Kg de Alcatra<br>";
                    if($selPag == "Cartão Tabajara"){
                        if($kg <5 && $kg >0){
                            $vlrf = ($kg * 5.90) - (($kg * 5.90)*0.05);
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de R$ 5,90 por Kg por comprar abaixo de 5 Kg<br>Desconto de 5% por comprar com o cartão Tabajara<br>";
                        }else if($kg >5){
                            $vlrf = ($kg * 6.80) - (($kg * 6.80)*0.05);
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de 5% por comprar com o cartão Tabajara<br>";
                        }else {
                            $vlrf = "Digite um valor válido";
                            $desc = "";
                            $tipo = "";
                        }
                    }else{
                        if($kg <5 && $kg >0){
                            $vlrf = $kg*5.90;
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de R$ 5,90 por Kg por comprar abaixo de 5 Kg<br>";
                        }else if($kg >5){
                            $vlrf = $kg*6.80;
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "";
                        }else {
                            $vlrf = "Digite um valor válido";
                            $desc = "";
                            $tipo = "";
                        }
                    }
                }

                //Picanha
                if($selCarn == "Picanha"){
                    $tipo = "$kg Kg de Picanha<br>";
                    if($selPag == "Cartão Tabajara"){
                        if($kg <5 && $kg >0){
                            $vlrf = ($kg * 6.90) - (($kg * 6.90)*0.05);
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de R$ 6,90 por Kg por comprar abaixo de 5 Kg<br>Desconto de 5% por comprar com o cartão Tabajara<br>";
                        }else if($kg >5){
                            $vlrf = ($kg * 7.80) - (($kg * 7.80)*0.05);
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de 5% por comprar com o cartão Tabajara<br>";
                        }else {
                            $vlrf = "Digite um valor válido";
                            $desc = "";
                            $tipo = "";
                        }
                    }else{
                        if($kg <5 && $kg >0){
                            $vlrf = $kg*6.90;
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "Desconto de R$ 6,90 por Kg por comprar abaixo de 5 Kg<br>";
                        }else if($kg >5){
                            $vlrf = $kg*7.80;
                            $vlrf = "Valor final: R$ $vlrf<br>";
                            $desc = "";
                        }else {
                            $vlrf = "Digite um valor válido";
                            $desc = "";
                            $tipo = "";
                        }
                    }
                }

               echo  $tipo,$desc,$vlrf;
            }
            
        ?>
        
    </body>
</html>