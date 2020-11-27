<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    use Nhansu\NhanSu;
    use Quanlynhansu\QuanLyNhanSu;

    include_once "Employee/nhansu.php";
    include_once "EmployeeManager/QuanLyNhanSu.php";

    $quanLyNhansu = new QuanLyNhanSu();
    $quanLyNhansu->themNhanSu(new NhanSu('Nguyễn1 Văn', 'Nam', '1/1/1991', 'Quảng Trị', 'Trưởng Phòng'));
    $quanLyNhansu->themNhanSu(new NhanSu('Trần Văn', 'Huy', '4/8/1989', 'Đà Nẵng', 'Giám Đốc'));
    $quanLyNhansu->themNhanSu(new NhanSu('Nguyễn Văn', 'Nam', '1/1/1991', 'Quảng Trị', 'Trưởng Phòng'));
    $quanLyNhansu->themNhanSu(new NhanSu('Trần Văn', 'Huy', '4/8/1989', 'Đà Nẵng', 'Giám Đốc'));
    $quanLyNhansu->themNhanSu(new NhanSu('Nguyễn Văn', 'Nam', '1/1/1991', 'Quảng Trị', 'Trưởng Phòng'));
    $quanLyNhansu->themNhanSu(new NhanSu('Trần Văn', 'Huy', '4/8/1989', 'Đà Nẵng', 'Giám Đốc'));

    // $quanLyNhansu->xoaNhanSu(2);    
    $quanLyNhansu->xoaNhanSu(4);    
    $quanLyNhansu->xoaNhanSu(5);    

    ?>
    <h2>QUẢN LÝ NHÂN SỰ</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã NS</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Địa Chỉ</th>
            <th>Vị Trí</th>
        </tr>
        <?php $nhanSu = $quanLyNhansu->getNhanSu();
        ?>
        <?php for ($x = 0; $x < count($nhanSu); $x++) : ?>
            <?php $thanhVien = $nhanSu[$x];
            ?>
            <tr>
                <td><?=$x+1?></td>
                <td> <?= $thanhVien->getId() ?></td>
                <td><?= $thanhVien->getHo(); ?></td>
                <td><?= $thanhVien->getTen(); ?></td>
                <td><?= $thanhVien->getNgaySinh(); ?></td>
                <td><?= $thanhVien->getDiaChi(); ?></td>
                <td><?= $thanhVien->getViTri(); ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>