<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ỨNG DỤNG ĐỌC SỐ THÀNH CHỮ</h3>
    <form method="post">
        <input type="number" name="number" placeholder="Nhập số">
        <input type="submit" value="Đọc">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $docSo = $_POST["number"];
            $ketQua = '';
            if (is_numeric($docSo) and $docSo > 0) {

                $cacChuSo = array(
                    0 => 'không',
                    1 => 'một',
                    2 => 'hai',
                    3 => 'ba',
                    4 => 'bốn',
                    5 => 'năm',
                    6 => 'sáu',
                    7 => 'bảy',
                    8 => 'tám',
                    9 => 'chín',
                    10 => 'mười',
                    11 => 'mười một',
                    12 => 'mười hai',
                    13 => 'mười ba',
                    14 => 'mười bốn',
                    15 => 'mười lăm',
                    16 => 'mười sáu',
                    17 => 'mười bảy',
                    18 => 'mười tám',
                    19 => 'mười chín',

                );
                if ($docSo < 19) {
                    $ketQua = $cacChuSo[$docSo];
                    var_dump($ketQua);
                }

                if ($docSo < 100 and $docSo >= 20) {
                    $hangChuc = (floor($docSo / 10));
                    $hangDonVi = $docSo % 10;

                    if ($hangDonVi == 0) {
                        $cacChuSo[$hangDonVi] = '';
                    }
                    if ($hangDonVi == 5) {
                        $cacChuSo[$hangDonVi] = 'lăm';
                    }
                    if ($hangDonVi == 1) {
                        $cacChuSo[$hangDonVi] = 'mốt';
                    }
                    $ketQua = $cacChuSo[$hangChuc] . ' ' . 'mươi'
                        . ' ' . $cacChuSo[$hangDonVi];
                    
                }

                if ($docSo < 1000 and $docSo >= 100) {
                    $hangTram = (floor($docSo / 100));
                    $layDu = $docSo % 100;
                    $hangChuc = (floor($layDu / 10));

                    $hangDonVi = $layDu % 10;

                    if ($hangDonVi == 0) {
                        $cacChuSo[$hangDonVi] = '';
                    }

                    if ($hangDonVi == 1) {
                        $cacChuSo[$hangDonVi] = 'mốt';
                    }
                    if ($hangDonVi == 5) {
                        $cacChuSo[$hangDonVi] = 'lăm';
                    }
                    if ($hangChuc != 0) {
                        $ketQua = $cacChuSo[$hangTram] . ' ' . 'trăm' . ' ' . $cacChuSo[$hangChuc] . ' ' . 'mươi' . ' ' . $cacChuSo[$hangDonVi];
                    }else{
                        $ketQua = $cacChuSo[$hangTram] . ' ' . 'trăm' . ' ' .'lẻ' . ' ' . $cacChuSo[$hangDonVi];
                    }
                }

            } else {
                $ketQua = 'Vui lòng nhập số từ 0 đến 999';
            }

            echo $ketQua;
        }
        ?>
</body>
</html>