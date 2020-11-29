<?php
include ("LopPoint2D.php");
include ('LopPoint3D.php');

$point2d = new Point2D(4,5);
$point3d = new Point3D(7,8,9);
echo 'Lớp Point2D '.'<br/>';
echo $point2d ->toString();
echo '<br/>';
echo 'Lớp Point3D '.'<br/>';
echo $point3d ->toString();