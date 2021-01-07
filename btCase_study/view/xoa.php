<div class="container">
    <div class='xoa'>
        <h1>Bạn có chắc chắn muốn xóa '<?= $thongTin['titele'] ?>' khỏi danh sách??</h1>
        <br>
        <form action="./index.php?action=xoa_khach_hang" method='post'>
            <input type="hidden" name="trang" value="<?= $trang ?>">
            <input type="hidden" name="id" value="<?= $thongTin['id'] ?>">
            <a href="index.php?action=danh_sach&page=<?=$trang?>"><button type="button" class="btn btn-primary">Hủy</button></a>
            <input type="submit" value="Xóa" class="btn btn-primary">
        </form>
    </div>
</div>