<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>TÍNH GIÁ TRỊ TƯƠNG LAI<h3>
        <form method='post'>
            <input type="number" name="sotien" placeholder="Nhập tiền">VND <br>
            <input type="text" name="laisuat" placeholder="Nhập lãi suất"> %<br>
            <input type="number" name="sonam" placeholder="Nhập số năm"><br>
            <input type="submit" value="Tính">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $tienDauTu = $_POST["sotien"];
                $laiSuat = $_POST["laisuat"];
                $soNam = $_POST["sonam"];
                $giaTriMotNam = $tienDauTu + ($tienDauTu * ($laiSuat));
                $giaTri = 0;
                for ($x = 1; $x <= $soNam; $x++) {
                     $giaTri +=($giaTriMotNam);
                }
                echo '<br/>'. $giaTri.' '.'VND';
            }
            ?>
</body>

</html>