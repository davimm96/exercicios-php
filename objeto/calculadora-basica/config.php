<?
    spl_autoload_register(function($nc){
        $pasta = "classe";
        $filename = $pasta.DIRECTORY_SEPARATOR.$nc.".php";

        if(file_exists($filename)){
            require_once($filename);
        }
    });
?>