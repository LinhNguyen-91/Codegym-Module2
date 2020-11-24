<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ỨNG DỤNG CHUYỂN ĐỔI TIỀN TỆ</h3>

    <form method='post'>
        <input type="text" name="nhaptien" placeholder="Nhập số tiền ">
        <select name="tiente">
            <option value="USD">USD</option>
            <option value="ERO">EUR</option>
            <option value="BANG_ANH">GBP</option>
            <option value="YEN_NHAT">JPY</option>
            <option value="CANADA">CAD</option>
            <option value="UC">AUD</option>
            <option value="SING">SGD</option>
        </select>
        <input type="submit" value="Tính">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cacLoaiTien = array(
            'USD' => 23260,
            'ERO' => 2842,
            'BANG_ANH' => 31409,
            'YEN_NHAT' => 224.13,
            'CANADA' => 18249,
            'UC' => 17272,
            'SING' => 17497,
        );
        
        $soTien = $_POST['nhaptien'];
        $ketQua = 0;

        foreach ($cacLoaiTien as $loaiTien => $tyGia) {
            if ($_POST['tiente'] == $loaiTien) {
                $ketQua = $soTien * $tyGia;
                break;
            }
        }
        
        echo "
        <script>
            document.write(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format($ketQua))
        </script>
       ";
    }
    ?>
</body>

</html>