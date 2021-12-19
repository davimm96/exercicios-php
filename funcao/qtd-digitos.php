<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            qtd dígitos
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="text"><br>
            <input type="submit" name="sub">
        </form>
        <?
            if(isset($_POST["sub"])){
                $text = $_POST["text"];

                echo "Quiantidade de dígitos: ".(strlen($text));
            }
        ?>
    </body>
</html>