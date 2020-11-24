<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sanPham = $_POST['sanpham'];
        $giaNiemYet = +$_POST['gia'];
        $tyLe = $_POST['tyle'];
        $tienChietKhau = $giaNiemYet * $tyLe * 0.1;
        echo 'Sản phẩm'. ' '.$sanPham.'<br/>';
        echo 'Có giá'. ' '.$giaNiemYet.' ' .'VND'.'<br/>';
        echo 'với tỷ lệ'. ' '. $tyLe.'%'.'<br/>';
        echo 'được giảm'.' '.$tienChietKhau.' '.'VND'.' '.'còn lại'.' ';
        echo $giaNiemYet - $tienChietKhau.' '.'VND';
    }
    ?>
</body>

</html>