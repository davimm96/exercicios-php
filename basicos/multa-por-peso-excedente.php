<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multa por peso excedente</title>
    </head>
    <body>
        <form action="multa-por-peso-excedente.php" method="POST">
            Quantidade de peso excedente: <input type="text" name="num"><br>
            <input type="submit">
        </form>
        <?
            echo "Você recebe uma multa de: R$ ",$_POST["num"] * 4.00;  
        ?>
    </body>
</html>