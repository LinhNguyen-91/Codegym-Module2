<?php
include_once ('Circle.php');
include_once ('Rectangle.php');
//include ('Shape.php');
include_once ('Square.php');
//include('InterfaceResizeable.php');


$mangHinh = array(
$hinhTron = new Circle('hình tròn',2),
$hinhChuNhat = new Rectangle('hình chữ nhật',2,3),
$hinhVuong = new Square('hình vuông',4)
);

$tyLeTang = rand(1,100);
for ($x = 0; $x <count($mangHinh); $x++){
    echo 'Trước'.'<br/>';
    echo $mangHinh[$x]->calculateArea();
    echo '<br/>';
    echo 'Sau'.'<br/>';
    echo $mangHinh[$x]->tangKichThuocHinh($tyLeTang);
    echo '<br/>';
}