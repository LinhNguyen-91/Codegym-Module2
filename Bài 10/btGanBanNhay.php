<?php
class Dancer {
    protected $name;
   // protected $gender;
    public function __construct($name)
    {
        $this->name = $name;
       // $this->gender = $gender;
    }
    public function getName(){
      return  $this->name;

}
//public function getGender()
//{
//    return $this->gender;
//}
}


$hangNam = new SplQueue();
$hangNu = new SplQueue();

$hangNam->enqueue(new Dancer("Đình"));
$hangNam->enqueue(new Dancer("Tuấn"));
$hangNam->enqueue(new Dancer("Bắc"));
$hangNam->enqueue(new Dancer("Đông"));

$hangNu->enqueue(new Dancer("Hoa"));
$hangNu->enqueue(new Dancer("Hằng"));
$hangNu->enqueue(new Dancer("Nga"));

echo $hangNam->dequeue()->getName();
echo $hangNu->dequeue()->getName();
echo "<br/>";
//echo $hangNam->dequeue()->getName();
//echo $hangNu->dequeue()->getName();
//echo "<br/>";
//echo $hangNam->dequeue()->getName();
//echo $hangNu->dequeue()->getName();
//echo "<br/>";


$hangNam->rewind();
while ($hangNam->valid()) {
    echo $hangNam->current()->getName();
    echo "<br/>";
    $hangNam->next();
}
