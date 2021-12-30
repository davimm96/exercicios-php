<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>
            Calculadora
        </title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="n1">
            <input type="number" name="n2"><br>
            <input type="submit" value="Soma" name="soma">
            <input type="submit" value="Menos" name="menos">
            <input type="submit" value="Vezes" name="vezes">
            <input type="submit" value="Divizao" name="divizao">
        </form>
    </body>
</html>

<?
    session_start();
    $_SESSION["n1"] =  $_POST["n1"];
    $_SESSION["n2"] = $_POST["n2"];
    $n1 = $_SESSION["n1"];
    $n2 = $_SESSION["n2"];

    require_once("config.php");
    use Base\Numeros;

    $soma = new Soma();
    $menos = new Menos();
    $vezes = new Vezes();
    $divizao = new Divizao();

    if(isset($_POST["soma"])){
        $soma->setConta($n1,$n2);
        $soma->getSoma();
        echo ("Resultado: ").$soma->getConta().("<br>");
    }

    if(isset($_POST["menos"])){
        $menos->setConta($n1,$n2);
        $menos->getMenos();
        echo ("Resultado: ").$menos->getConta().("<br>");
    }

    if(isset($_POST["vezes"])){
        $vezes->setConta($n1,$n2);
        $vezes->getVezes();
        echo ("Resultado: ").$vezes->getConta().("<br>");
    }

    if(isset($_POST["divizao"])){
        $divizao->setConta($n1,$n2);
        $divizao->getDivizao();
        echo ("Resultado: ").$divizao->getConta().("<br>");
    }
    
?>