<?php
include_once ('Circle.php');
class Cylinder extends Circle{
    private $chieucao;
    public function __construct($bankinh, $mausac,$chieucao)
    {
        parent::__construct($bankinh, $mausac);
        $this->chieucao = $chieucao;
    }
    public function tinhTheTich(){
        return pi()*pow($this->getBanKinh(),2)*$this->chieucao;
    }
}