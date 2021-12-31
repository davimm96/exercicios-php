<?
    namespace Bebidas;

    class Produtos {
        protected $refrigerante;
        protected $suco;
        protected $agua;

        function getRefrigerante():float {
            return 5;
        }

        function getSuco():float {
            return 14.50;
        }

        function getAgua():float {
            return 2.19;
        }
    }
?>