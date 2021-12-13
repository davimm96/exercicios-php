<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Par, impar, positivo, negativo, inteiro e decimal</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="n"><br>
            <input type="submit" value="Par ou Impar" name="pi"><br>
            <input type="submit" value="Negativo ou Positivo" name="np"><br>
            <input type="submit" value="Inteiro ou Decimal" name="id">
        </form>
        <div id="res">
           <?res()?>
        </div>

        
      

       
        <?
            
            $resp = "";
            function res(){
                $n = $_POST["n"];
                if(isset($_POST["pi"])){
                    if(is_numeric($n) == true){
                        if($n%2 == 0)
                            $resp = "É Par";
                        else
                            $resp = "É Impar";  
                    }else 
                        $resp = "Escreva um número";
                    echo $resp;
                }

                if(isset($_POST["np"])){
                    if(is_numeric($n) == true){
                        if($n < 0)
                            $resp = "É Negativo";
                        else
                            $resp = "É Positivo";
                    }else 
                        $resp = "Escreva um número";
                    echo $resp;
                }

                if(isset($_POST["id"])){
                    if(is_numeric($n) == true){
                        if((int)$n == $n)
                            $resp = "É inteiro";
                        else
                            $resp = "É decimal";
                    }else 
                        $resp = "Escreva um número";
                    echo $resp;
                } 
            }   
        ?>
               
        </script>
    </body>
</html>