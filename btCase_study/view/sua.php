<div class="container">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-7">
            <h1>SỬA GHI CHÚ</h1>
            <br>
            <form action="./index.php?controller=khachhang&action=sua_thong_tin" method='post'>
                <table>
                    <tr>
                        <td> <input type="hidden" name="id" value="<?= $thongTin['id'] ?>"></td>
                        <td> <input type="hidden" name="trang" value="<?= $trang?>"></td>
                    </tr>
                    <tr>
                        <th>Tiêu Đề :</th>
                        <td> <input type="text" name="tieude" value="<?= $thongTin['titele'] ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Nội Dung : </th>
                        <td><textarea rows="6" cols="50" name="noidung" class="form-control"><?= $thongTin['content'] ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Phân Loại </th>
                        <td>
                            <select name="phanloai" class="btn btn-info dropdown-toggle">
                                <option value="1" <?php if ($thongTin['type_id'] == 1) {
                                                        echo 'selected';
                                                    }; ?>>Cá Nhân</option>
                                <option value="2" <?php if ($thongTin['type_id'] == 2) {
                                                        echo 'selected';
                                                    }; ?>>Công ty</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="index.php?action=danh_sach&page=<?=$trang?>"><button type="button" class="btn btn-primary">Hủy</button> </a>
                            <input type="submit" value="Sửa" class="btn btn-primary">
                        </td>
                    </tr>

                </table>
            </form>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>