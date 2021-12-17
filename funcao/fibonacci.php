<html>
 <head>
  <title>Fibonacci</title>
 </head>
 <body>
 <form action="" method="get">
  Fatorial de de: <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form> 
 <?php
  $numero = $_GET['number'];
  echo "O termo $numero é: ".fibo($numero);
  
  function fibo($numero){
   if($numero==0 || $numero==1)
    return $numero;
   else
    return (fibo($numero-1) + fibo($numero-2));
  }
 ?>
 </body>
</html>