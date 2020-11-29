<?php
include ('Circle.php');
include ('Cylinder.php');
$hinhTron = new Circle(10,"red");
echo 'Diện tích hình tròn là :'.$hinhTron->tinhDienTich();
echo "<br/>";
$hinhTru = new Cylinder(10,'red',5);
echo "Thể tích hình trụ là :". $hinhTru->tinhTheTich();