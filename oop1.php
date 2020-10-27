<?php
$instance = new Vrzon;
class Vrzoň {//definice class Vrzoň
    public $okackoVrzon1 = 10;//definice typu funkce
    public $okackoVrzon2 = 3;
    public $okackoVrzon3 = 50;
    public $okackoVrzon4 = 11;
    public $okackoVrzon5 = 29 ;
    protected $okackoVrzon6 = 26;//definice chráněné funkce
    protected $okackoVrzon7 = 31; 
    protected $okackoVrzon8 = 36;
    private $okackoVrzon9 = 189;//definice privátní funkce
    private $okackoVrzon10 = 65;

    /**
     * @param okackoVrzon1
     * @return ind
     */
    public function getokackoVrzon1 () {//definice veřejné funkce
       return $this-> okackoVrzon1;
    }
    /**
     * @param okackoVrzon2
     * @return ind
     */
    public function getokackoVrzon2 () {
       return $this-> okackoVrzon2;
    }
    /**
     * @param okackoVrzon3
     * @return ind
     */
    public function getokackoVrzon3 () {
       return $this-> okackoVrzon3;
    }
    /**
     * @param okackoVrzon4
     * @return ind
     */
    public function getokackoVrzon4 () {
       return $this-> okackoVrzon4;
    }
    /**
     * @param okackoVrzon5
     * @return ind
     */
    public function getokackoVrzon5 () {
       return $this-> okackoVrzon5;
    }
    /**
     * @param okackoVrzon9
     * @return ind
     */
    private function setokackoVrzon9 () {
       return $this-> okackoVrzon9; 
    }
    /**
     * @param okackoVrzon10
     * @return ind
     */
    private function setokackoVrzon10 () {
        return $this-> okackoVrzon10;
    }
    public function _construct () {

    }

} 
var_dump ($instance);//vypíše hodnoty
$cisla = new Vrzon();
$cisla-> getokackoVrzon1('10');
echo $cisla-> getokackoVrzon1();//vypíše hodnotu getokacko1
echo '<br>';
$cisla-> getokackoVrzon2('3');
echo $cisla-> getokackoVrzon2();
echo '<br>';
$cisla-> getokackoVrzon3('50');
echo $cisla-> getokackoVrzon3();
echo '<br>';
$cisla-> getokackoVrzon4('11');
echo $cisla-> getokackoVrzon4();
echo '<br>';
$cisla-> getokackoVrzon5('29');
echo $cisla-> getokackoVrzon5();

?>;