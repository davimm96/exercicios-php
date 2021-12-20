<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Indice valor
        </title>
    </head>
    <body>
        <?
            $frutas["vermelha"] = "maçã";
            $frutas["amarelo"] = "banana";
            $frutas["roxo"] = "uva";

            foreach($frutas as $c => $v)
                echo "$c : $v<br>";
        ?>
    </body>
</html>