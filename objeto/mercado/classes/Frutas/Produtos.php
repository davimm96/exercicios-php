<?
    namespace Frutas;

    class Produtos {
        protected $laranja;
        protected $maca;
        protected $uva;
        protected $banana;

        function getLaranja():float{
            return 1.75;
        }

        function getMaca():float {
            return 7.99;
        }

        function getUva():float {
            return 10;
        }

        function getBanana():float {
            return 2.50;
        }
    }
?>