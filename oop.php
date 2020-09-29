$instance = new Vrzoň;
class Vrzoň {
    public $okacko1 = 10; 
    public $okacko2 = 3;
    public $okacko3 = 50;
    public $okacko4 = 11;
    public $okacko5 = 29 ;
    protected $okacko6 = 26;
    protected $okacko7 = 31; 
    protected $okacko8 = 36;
    private $okacko9 = 189;
    private $okacko10 = 65;

    public function getokacko1 () {
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
var_dump ($instance);
$okacko1 = new Vrzoň();
$okacko1-> getokacko1('10');
echo $okacko1-> getokacko1();
echo '<br>';
$okacko2 = new Vrzoň();
$okacko2-> getokacko2('3');
echo $okacko2-> getokacko2();
echo '<br>';
$okacko3 = new Vrzoň();
$okacko3-> getokacko3('50');
echo $okacko3-> getokacko3();
echo '<br>';
$okacko4 = new Vrzoň();
$okacko4-> getokacko4('11');
echo $okacko4-> getokacko4();
echo '<br>';
$okacko5 = new Vrzoň();
$okacko5-> getokacko5('29');
echo $okacko5-> getokacko5();
