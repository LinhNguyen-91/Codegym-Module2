<?php
class PTBacHai
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->b;
    }
    public function getC()
    {
        return $this->c;
    }
    public function  getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }
    private function getRoot1()
    {

        return (- ($this->b + sqrt($this->getDiscriminant()))) / 2 * $this->a;
    }
    private function getRoot2()
    {

        return (- ($this->b - sqrt($this->getDiscriminant()))) / 2 * $this->a;
    }
    private function getRoot()
    {
        return -$this->b / 2 * $this->a;
    }
    public function nghiemPT()
    {
        if ($this->getDiscriminant() > 0) {
            echo 'PT có 2 nghiệm : ' . $this->getRoot1() . '<br/>' . $this->getRoot2();
            return;
        }
        if ($this->getDiscriminant() < 0) {
            echo 'PT vô nghiệm';
            return;
        }
        echo 'PT có nghiệm kép : ' . $this->getRoot();
    }
}
$phuongtrinh1 = new PTBacHai(1, 3, 1);
echo $phuongtrinh1->nghiemPT();
echo '<br/>';
echo $phuongtrinh1->getDiscriminant();
