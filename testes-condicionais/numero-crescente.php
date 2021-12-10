<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Número crescente</title>
    </head>
    <body>
        <form action="" method="POST">
            Número 1: <input type="number" name="num1"><br>
            Número 2: <input type="number" name="num2"><br>
            Número 3: <input type="number" name="num3"><br>
            <input type="submit">
        </form>

        <?
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            $result1; $result2; $result3;

            if($num1 > $num2 && $num1 > $num3)
                $result1 = $num1;
            else if($num1 > $num2 && $num1 < $num3)
                $result2 = $num1;
            else if($num1 > $num3 && $num1 < $num2)
                $result2 = $num1;
            else if($num1 < $num2 && $num1 < $num3)
                $result3 = $num1;

            if($num2 > $num1 && $num2 > $num3)
                $result1 = $num2;
            else if($num2 > $num1 && $num2 < $num3)
                $result2 = $num2;
            else if($num2 > $num3 && $num2 < $num1)
                $result2 = $num2;
            else if($num2 < $num1 && $num2 < $num3)
                $result3 = $num2;

            if($num3 > $num1 && $num3 > $num2)
                $result1 = $num3;
            else if($num3 > $num1 && $num3 < $num2)
                $result2 = $num3;
            else if($num3 > $num2 && $num3 < $num1)
                $result2 = $num3;
            else if($num3 < $num1 && $num3 < $num2)
                $result3 = $num3;

            echo "$result1, $result2, $result3";

        ?>
    </body>
</html>