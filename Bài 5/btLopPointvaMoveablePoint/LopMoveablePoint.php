<?php
include_once('LopPoint.php');
class MovablePoint extends Point{
    private $xSpeed;
    protected $ySpeed;
    public function __construct($x = 0, $y = 0,$xSpeed = 0,$ySpeed = 0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public  function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
        return array($this->getXSpeed(),$this->getYSpeed());
    }
    public function toString()
    {
        return 'Tọa độ x : '.$this->getX().' '.
            'Tốc độ : '. $this->getXSpeed().'<br/>'.
            'Tọa độ y : '.$this->getY().' '.
            "Tốc độ : ". $this->getYSpeed();
    }
}
