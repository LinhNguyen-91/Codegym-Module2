<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-image: url("https://static.ybox.vn/2018/8/3/1534955341923-Untitled-1.jpg");
            background-size: cover;
            height: 100vh;
        }

        .container {
            padding-top: 50px;
            text-align: center;
            color: #000099;
            text-shadow: 1px 1px 1px #FFFFFF;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        session_destroy();


        header('Location:../../formdangnhap/dangnhap.php');
    }
    $trang = $_GET['page'];
    ?>
    <div class="container">
        <h1>Bạn có chắc chắn muốn đăng xuất ?</h1>
        <br>
        <form method='post'>
            <a href="../../index.php?controller=quanly&action=danh_sach&page=<?=$trang?>"><button type="button" class="btn btn-primary">Hủy</button></a>
            <input type="submit" value="Đăng Xuất" class="btn btn-primary">
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
</html>