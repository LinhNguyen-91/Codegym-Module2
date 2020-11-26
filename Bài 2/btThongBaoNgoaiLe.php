<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ỨNG DỤNG MÁY TÍNH</h3>
    <form method="post">
        <input type="text" name="sodau" placeholder="Nhập số đầu">
        <select name="toantu">
            <option value="+">cộng</option>
            <option value="-">trừ</option>
            <option value="*">nhân</option>
            <option value="/">chia</option>
        </select>
        <input type="text" name="socuoi" placeholder="Nhập số cuối">
        <input type="submit" value="Tính">
    </form>
    <?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $soDau = $_POST['sodau'];
        $soCuoi = $_POST['socuoi'];
        $toanTu = $_POST['toantu'];
        $ketQua = 0;
        function kiemTra($soCuoi)
        {
            if ($soCuoi == 0) {
                throw new Exception('by zero');
            }
        }
        try {
            kiemTra($soCuoi);
            switch ($toanTu) {
                case '+':
                    $ketQua = $soDau + $soCuoi;
                    break;
                case '-':
                    $ketQua = $soDau - $soCuoi;
                    break;
                case '*':
                    $ketQua = $soDau * $soCuoi;
                    break;
                case '/':
                    $ketQua = $soDau / $soCuoi;
                    break;
            }
            echo $soDau . $toanTu . $soCuoi . '=' . $ketQua;
        } catch (Exception $e) {
            echo  $e->getMessage();
        }
    }

    ?>
</body>

</html>