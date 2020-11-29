<?php
include_once ('LopPoint2D.php');
class Point3D extends Point2D
{
    private $z;

    public function __construct($x = 0, $y = 0, $z = 0)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = x;
        $this->y = y;
        $this->z = $z;

    }

    public function getXYZ()
    {
        return array($this->getX(), $this->getY(), $this->getZ());
    }

    public function toString()
    {

        return 'Tọa độ x :' . $this->getX() .'<br/>'.
            'Tọa độ y :' . $this->getY() .'<br>'.
            'Tọa độ z :' . $this->getZ();
    }
}
    $point3d = new Point3D(1,2,3);



