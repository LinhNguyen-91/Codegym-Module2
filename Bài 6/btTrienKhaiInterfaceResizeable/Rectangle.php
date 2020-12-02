<?php

include_once('Shape.php');
include_once ('InterfaceResizeable.php');

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
    public function tangKichThuocHinh($tyLePhanTram)
    {
        return $this->calculateArea()*$tyLePhanTram;
    }
}