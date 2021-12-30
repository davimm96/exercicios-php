<?
    namespace Base;

    abstract class Numeros {
        protected $x;
        protected $y;
        protected $result;

        public function setConta($x,$y){
            $this->x = $x;
            $this->y = $y;
        }

        public function getConta():float{
            return $this->result;
        }

    }

?>