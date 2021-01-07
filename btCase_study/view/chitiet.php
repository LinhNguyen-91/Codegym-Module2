<div class="container" style="padding-top:5%;text-align:center">
    <div class="ghichu">
        <div class="suaxoa">
            <a href="index.php?action=sua_thong_tin&id=<?= $thongTin['id']?>&page=<?=$trang?> ?>">...</a>
            <a href="./index.php?action=xoa_khach_hang&id=<?= $thongTin['id']?> &page=<?=$trang?>">X</a>
        </div>
        <form action="./index.php?action=xoa_khach_hang&page=<?=$trang?>" method='get'>
                     <input type="hidden" name="trang" value="<?= $trang?>">
                    
            <div class="tieude2">
                <h2> <?= $thongTin['titele'] ?></h2></br>
            </div>
            <div class="noidung">
                <h4> <?= $thongTin['content'] ?></h4>
            </div>

            <div class="quaylai">
                <a href="index.php?action=khachhang&page=<?=$trang?>">Trở về</a>
            </div>
        </form>
    </div>
</div>