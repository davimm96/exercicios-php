<html>
 <head>
  <title>Número primo</title>
 </head>
 <body>
 <form action="" method="POST">
  Somatório de: <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form> 
 <?php
    $d = 0;
    $d2;
   
    function aula($num){
        $n = $_POST["number"];
      
        if($num != $n+1){
            if($n % $num == 0)
                $GLOBALS["d"] = $GLOBALS["d"] +1;
            
            if($GLOBALS["d"] == 2)
                $GLOBALS["d2"] = "$n é primo<br>";
            else
                $GLOBALS["d2"] = "$n não é primo<br>";

            aula($num+1);
        }
    }

    aula(1);
    echo $GLOBALS["d2"];
   
 ?>
<script>
    /*
        function primo(){
            var numero = parseInt(document.getElementById('num').value);
            var resposta = document.getElementById('resposta');
            var divisores=0;
        
            for(var count=1 ; count<=numero ; count++)
                if(numero % count == 0)
                    divisores++;
            
            if(divisores==2)
                resposta.innerHTML='É primo';
            else
                resposta.innerHTML='Não é primo';
        }
    */
</script>
 </body>
</html>