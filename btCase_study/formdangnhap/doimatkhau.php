<?php
include '../model/lop_ket_noi.php';
include_once '../model/lop_dang_ki.php';
$ketNoi = new KetNoi();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = $_POST['taikhoan'];
    $matKhauCu = $_POST['matkhaucu'];
    $matKhau = $_POST['matkhau'];
    $matKhau2 = $_POST['matkhau2'];

    if ($matKhau != $matKhau2) {
        echo '<h2 style="color: red">Mật khẩu mới không trùng nhau</h2>' . '<br/>';
        echo "<a href = 'doimatkhau.php'><button type='button'>Quay lại</button> </a>";
        exit();
    }
    if (strlen($ten) < 3 or strlen($matKhau < 4)) {
        echo '<h2 style="color: red">Tên và mật khẩu không được để trống và lớn hơn bốn kí tự</h2>' . '<br/>';;
        echo "<a href = 'doimatkhau.php'><button type='button'>Quay lại</button></a>";
        exit();
    }

    $nguoiDung = new User($ten, $matKhau);

    $sql = "SELECT * FROM dang_nhap WHERE gmail = '$nguoiDung->ten'";
    $query = mysqli_query($ketNoi->ketNoi(), $sql);

    $ketQua = mysqli_fetch_assoc($query);
    $id = $ketQua['id'];
    $mk = $ketQua['mat_khau'];

    if ($mk != $matKhauCu) {
        echo "<h5 style='color: white'>Mật khẩu cũ không đúng!!!</h5>";
    } else {

        $sql2 = "UPDATE dang_nhap SET mat_khau ='$nguoiDung->matkhau'
WHERE id=$id";

        $ketQua2 = mysqli_query($ketNoi->ketNoi(), $sql2);

        echo "<h5 style='color: white'>Đổi mật khẩu thành công!!!</h5>";
    }
}
include './head.php';
?>

<div class="center-container">
    <div class="header-w3l">
        <h1>ỨNG DỤNG GHI CHÚ</h1>
    </div>
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <div class="wthree-pro">
                <h2>Đổi mật khẩu</h2>
            </div>
            <form action="#" method="post">
                <div class="pom-agile">
                    <input value="<?= $_GET['user'] ?>" name="taikhoan" class="user" type="email" required="">
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="pom-agile">
                    <input placeholder="Nhập mật khẩu củ" name="matkhaucu" class="pass" type="password" required="">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <div class="pom-agile">
                    <input placeholder="Nhập mật khẩu mới" name="matkhau" class="pass" type="password" required="">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <div class="pom-agile">
                    <input placeholder="Nhập lại mật khẩu mới" name="matkhau2" class="pass" type="password" required="">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <div class="sub-w3l">

                    <div class="right-w3l">
                        <input type="submit" value="Đổi">
                        <a href="../index.php"><input type="button" value="Quay Lại"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include './footer.php'; ?>
</div>