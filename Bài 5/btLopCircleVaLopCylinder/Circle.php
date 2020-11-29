<?php
class Circle{
    private $bankinh;
    private $mausac;
    public function __construct($bankinh,$mausac)
    {
        $this->bankinh= $bankinh;
        $this->mausac = $mausac;
    }
    public  function getBanKinh(){
        return $this->bankinh;
    }
    public  function  setBanKinh($bankinh){
        $this->bankinh = $bankinh;
    }
    public function getMauSac(){
        return $this->mausac;
    }
    public function setMauSac($mausac){
        $this->mausac= $mausac;
    }
    public function tinhDienTich(){
        return $this->bankinh * $this->bankinh*pi();
    }
}