<?php

session_start();

$ketNoi = new KetNoi();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['taikhoan'];
    $password = $_POST['matkhau'];

    if ($username == "" || $password == "") {
        echo "username hoặc password bạn không được để trống!";
    } else {
        $sql = "SELECT * FROM quan_ly WHERE email = '$username' and mat_khau = '$password' ";
        $query = mysqli_query($ketNoi->ketNoi(), $sql);

        $ketQua = mysqli_fetch_assoc($query);

        if ($ketQua == 0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
            // header('Location:./view/formquanly/quanly.php');
        } else {
            $_SESSION['username'] = $username;
            header('Location:../../index.php?controller=quanly&action=danh_sach');
        }
    }
}
