<?
    spl_autoload_register(function($nc){
        $fn = "classes".DIRECTORY_SEPARATOR.$nc.".php";

        if(file_exists($fn)){
            require_once($fn);
        }
    });
    
?>