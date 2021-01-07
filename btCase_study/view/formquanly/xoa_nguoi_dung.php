<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="container">
        <h1>Bạn có chắc chắn muốn xóa '<?= $thongTin['gmail'] ?>' khỏi danh sách??</h1>
        <br>
        <form action="" method='post'>
            <input type="hidden" name="id" value="<?= $thongTin['id'] ?>">
            <a href="./index.php?controller=quanly&action=danh_sach&page=<?=$trang?>"><button type="button" class="btn btn-primary">Hủy</button></a>
            <input type="submit" value="Xóa" class="btn btn-primary">
        </form>
    </div>
</body>

</html>