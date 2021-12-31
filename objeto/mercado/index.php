<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Mercado</title>
    </head>
    <body>
        <form action="" method="POST">
            Frutas<br>
            <input type="number" name="laranja" value="0"> KG de Laranja<br>
            <input type="number" name="maca" value="0"> KG de Maçã<br>
            <input type="number" name="uva" value="0"> KG de Uva<br>
            <input type="number" name="banana" value="0"> KG de Laranja<br>

            Verduras<br>
            <input type="number" name="cenoura" value="0"> KG de Cenoura<br>
            <input type="number" name="batata" value="0"> KG de Batata<br>
            <input type="number" name="cebola" value="0"> KG de Cebola<br>
            <input type="number" name="moranga" value="0"> KG de Moranga<br>
            
            Bebidas<br>
            <input type="number" name="refrigerante" value="0"> unidade(s) de Refrigerante<br>
            <input type="number" name="suco" value="0"> unidade(s) de Suco<br>
            <input type="number" name="agua" value="0"> unidade(s) de Água<br>
            <!-- refrigerante suco agua-->

            <br><input type="submit" name="submit">
        </form>
    </body>
</html>
<?
    require_once("config.php");

    use Bebidas\Produtos as pb;
    use Frutas\Produtos as fp;
    use Verduras\Produtos as vp;

    $bebidas = new pb;
    $frutas = new fp;
    $verduras = new vp;


    //echo $unidades->getLaranja();
    //echo $bebidas->getBebidas().("<br>").$frutas->getFrutas().("<br>").$verduras->getVerduras();

    if(isset($_POST["submit"])){
        $res += (int)$frutas->getLaranja() * $_POST["laranja"];
        $res += (int)$frutas->getMaca() * $_POST["maca"];
        $res += (int)$frutas->getUva() * $_POST["uva"];
        $res += (int)$frutas->getBanana() * $_POST["banana"];
        $res += (int)$verduras->getCenoura() * $_POST["cenoura"];
        $res += (int)$verduras->getBatata() * $_POST["batata"];
        $res += (int)$verduras->getCebola() * $_POST["cebola"];
        $res += (int)$verduras->getMoranga() * $_POST["moranga"];
        $res += (int)$bebidas->getRefrigerante() * $_POST["refrigerante"];
        $res += (int)$bebidas->getSuco() * $_POST["suco"];
        $res += (int)$bebidas->getAgua() * $_POST["agua"];
        
        echo "Toltal: R$ $res";
    }

    ini_set('display_errors', 0 );
    error_reporting(0);

   
?>
