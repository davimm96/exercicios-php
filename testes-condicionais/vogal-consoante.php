<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vogal Consoante</title>
    </head>
    <body>
        <form action="" method="POST">
            Escreva uma letra: <input type="text" name="letra"><br>
            <input type="submit">
        </form> 
        <?
            $letra = strtolower($_POST["letra"]);
            switch($letra){
                case "a": case "e": case "i": case "o": case "u": 
                    echo "Vogal"; break;
                case "b": case "c": case "d": case "f": case "g": case "h": case "j": case "k": case "l": case "m":
                case "n": case "p": case "q": case "r": case "s": case "t": case "v": case "w": case "x": case "y":
                case "z":
                    echo "Consoante"; break;
                default: echo "Digite apenas uma letra";
            };
        ?>
    </body>
</html>