<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>HIỆN CÁC SỐ NGUYÊN TỐ</h3>
    <form method='post'>
        <input type="number" name="soluong" placeholder="Nhập số lượng">
        <input type="submit" value="Hiện">
    </form>
    <?php
    function isPrimeNumber($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $soLuong = $_POST['soluong'];
        $dem = 0;
        $num = 1;
        if (is_numeric($soLuong)) {
            while ($dem < $soLuong) {
                if (isPrimeNumber($num)) {
                    echo $num . '<br/>';
                    $dem++;
                }

                $num++;
            }
        }else {
            echo 'Vui lòng nhập số nguyên dương';
        }
    }
    ?>
</body>

</html>