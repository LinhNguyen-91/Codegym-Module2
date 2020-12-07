<?php

class  Patient{
    protected $name;
    protected $code;
    public function __construct($name,$code)
    {
        $this->name = $name;
        $this->code = $code;

    }
    public function getName(){
        return $this->name;
}
    public function setName($name){
        $this->name = $name;
    }
    public function getCode(){
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

}

class Queue
{
   protected $danhSach;
protected $daKham;

    function __construct()
    {
        $this->danhSach = array();
        $this->daKham = array();
    }

    public function isEmpty()
    {
        return count($this->danhSach)===0;
    }

    public function enqueue($code,$name)
    {
        $benhNhan = new  Patient($code,$name);

      array_push($this->danhSach,$benhNhan);

        for ($i = 0; $i < count($this->danhSach); $i++) {
            $minIndex = $i;
            $min = $this->danhSach[$i]->getCode();
            for ($j = $i + 1; $j < count($this->danhSach); $j++) {
                if ($min > $this->danhSach[$j]->getCode()) {
                    $minIndex = $j;
                    $min = $this->danhSach[$j]->getCode();
                }
            }

            $temp = $this->danhSach[$minIndex];
            $this->danhSach[$minIndex] =$this->danhSach[$i];
            $this->danhSach[$i] = $temp;
        }

    }


    public function dequeue()
    {

        $daKiemTra =  array_slice($this->danhSach,0,1);
        array_push($this->daKham,$daKiemTra);
        return $daKiemTra;

    }
    public function toString(){
        for ($x =0; $x <count($this->danhSach);$x++){
            echo $this->danhSach[$x]->getCode();
            echo ' ';
            echo $this->danhSach[$x]->getName();
            echo '<br/>';

        }
    }
    public function danhSachDaKham(){
       for ($x=0;$x<count($this->daKham);$x++){
           echo $this->danhSach[$x]->getCode();
           echo ' ';
           echo $this->danhSach[$x]->getName();
           echo '<br/>';
       }
    }
}
$danhSach = new Queue;

$danhSach ->enqueue(Smith,5);
$danhSach ->enqueue(Jones,4);
$danhSach ->enqueue( Fehrenbach,6);
$danhSach ->enqueue(Brown,1);
$danhSach ->enqueue(Ingram,1);
$danhSach ->enqueue(Ingram,3);


echo $danhSach->dequeue();
$danhSach->danhSachDaKham();