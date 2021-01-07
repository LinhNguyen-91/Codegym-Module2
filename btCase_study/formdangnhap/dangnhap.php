<?php
session_start();

include '../model/lop_ket_noi.php';

$ketNoi = new KetNoi();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['taikhoan'];
    $password = $_POST['matkhau'];

    if ($username == "" || $password == "") {
        echo "<h5 style='color: white'>Tên đăng nhập và mật khẩu bạn không được để trống!</h5>";
    } else {
        $sql = "SELECT * FROM dang_nhap WHERE gmail = '$username' and mat_khau = '$password' ";
        $query = mysqli_query($ketNoi->ketNoi(), $sql);
        $ketQua = mysqli_fetch_assoc($query);

        if ($ketQua == 0) {
            echo "<h5 style='color: white'>Tên đăng nhập hoặc mật khẩu không đúng !</h5>";
        } else {
            $_SESSION['username'] = $username;
            header('Location:../index.php?controller=khach_hang&action=khach_hang');
        }
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
                <h2><a href="./quanly.php" style="color: white">Đăng Nhập</a> </h2>
            </div>
            <form action="" method="post">
                <div class="pom-agile">
                    <input placeholder="Nhập email" name="taikhoan" class="user" type="email" required="">
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="pom-agile">
                    <input placeholder="Password" name="matkhau" class="pass" type="password" required="">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <div class="sub-w3l">
                    <h6><a href="#">Quên mật khẩu?</a></h6>
                    <div class="right-w3l">
                        <input type="submit" value="Đăng Nhập">
                        <a href="../formdangnhap/dangki.php"><input type="button" value="ĐăngKí"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include './footer.php'?>
</div>