<?php
$instance = new Vrzoň;
class Vrzoň {//definice class Vrzoň
    public $okacko1 = 10;//definice typu funkce
    public $okacko2 = 3;
    public $okacko3 = 50;
    public $okacko4 = 11;
    public $okacko5 = 29 ;
    protected $okacko6 = 26;//definice chráněné funkce
    protected $okacko7 = 31; 
    protected $okacko8 = 36;
    private $okacko9 = 189;//definice privátní funkce
    private $okacko10 = 65;

    public function getokacko1 () {//definice veřejné funkce
       return $this-> okacko1;
    }
    public function getokacko2 () {
       return $this-> okacko2;
    }
    public function getokacko3 () {
       return $this-> okacko3;
    }
    public function getokacko4 () {
       return $this-> okacko4;
    }
    public function getokacko5 () {
       return $this-> okacko5;
    }

    private function setokacko9 () {
       return $this-> okacko9; 
    }
    private function setokacko10 () {
        return $this-> okacko10;
    }
    public function _construct () {

    }

} 
var_dump ($instance);//vypíše hodnoty
$cisla = new Vrzoň();
$cisla-> getokacko1('10');
echo $cisla-> getokacko1();//vypíše hodnotu getokacko1
echo '<br>';
$cisla-> getokacko2('3');
echo $cisla-> getokacko2();
echo '<br>';
$cisla-> getokacko3('50');
echo $cisla-> getokacko3();
echo '<br>';
$cisla-> getokacko4('11');
echo $cisla-> getokacko4();
echo '<br>';
$cisla-> getokacko5('29');
echo $cisla-> getokacko5();

?>;
