<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipo triângulo</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="n1"><br>
            <input type="number" name="n2"><br>
            <input type="number" name="n3"><br>
            <input type="submit">
        </form>
        <?
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];

            if($n1 == $n2 && $n1 == $n3)
                echo "Triângulo Equilátero";
            else if($n1 == $n2 && $n1 != $n3)
                echo "Triângulo Isósceles";
            else if($n1 == $n3 && $n1 != $n2)
                echo "Triângulo Isósceles";
            else 
                echo "Triângulo Escaleno";
        ?>
    </body>
</html>