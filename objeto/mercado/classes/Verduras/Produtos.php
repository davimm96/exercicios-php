<?
    namespace Verduras;

    class Produtos {
        protected $cenoura;
        protected $batata;
        protected $cebola;
        protected $moranga;
        //preço por kg
        function getCenoura():float {
            return 1.50;
        }

        function getBatata():float {
            return 3.59;
        }

        function getCebola():float {
            return 3.59;
        }

        function getMoranga():float {
            return 3.39;
        }
    }
?>