<div class="tongthe">
    <div class="container">
        <div class="row" style="padding-top: 15px">
            <div class="col-lg-9">
                <h1> <a href="./index.php?controller=quanly&action=nguoi_dung_da_xoa" style="text-decoration: none;">NGƯỜI DÙNG ĐÃ XÓA</a></h1>
            </div>
            <div class="col-lg-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Xin chào <?= $user ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="./index.php?controller=quanly&action=danh_sach">Quay lại</a></li>
                        <li> <a class="dropdown-item" href="view/formquanly/dangxuat.php?page=<?= $trang ?>">Đăng Xuất</a></li>
                </div>
            </div>
        </div>
        <br>

        <form action="./index.php?controller=quanly&action=tim_nguoi_dung_da_xoa" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" style="color: #000099" placeholder="Tìm kiếm ..." name="tim" class="form-control">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i></button>
                    </td>
                </tr>
            </table>
        </form>
        </br>
        </br>
        </br>
        <div class="row">
            <div class="col-lg-9">
                <h6 style="color: #000099"><?php
                                            if ($thongTin != 0) {
                                                echo 'Đang tìm kiếm người dùng ' . $thongTin;
                                            } else {
                                                echo 'Danh sách đầy đủ';
                                            }
                                            ?>
                </h6>
            </div>
            <div class="col-lg-3">
                <h6 style="color: #000099">Bạn có <?= $tongNote ?> người dùng trong <?= $tongTrang ?> trang </h6>
            </div>
        </div>
        </br>
        <div class="bang">
            <table class="table table-hover">
                <thead>
                    <th>STT</th>
                    <th>Người dùng</th>
                    <th>Mật Khẩu</th>
                    <th>Thao Tác</th>
                </thead>

                <tbody>

                    <?php foreach ($danhSach as $key => $value) : ?>

                        <tr>
                            <td>
                                <?= ++$key + $batDau ?>
                            </td>

                            <td>
                                <?= $value['gmail'] ?></a>
                            </td>
                            <td>
                                <?= $value['mat_khau'] ?>
                            </td>
                            <td>
                                <a href="./index.php?controller=quanly&action=khoi_phuc_nguoi_dung&id=<?= $value['id'] ?>&page=<?= $trang ?>"><button type="button" class="btn btn-primary">Khôi phục</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
    <div class="phantrang">
        <?php

        if ($trangHienTai > 1 && $tongTrang > 1) {
            echo '<a href="./index.php?controller=quanly&action=nguoi_dung_da_xoa&page=' . ($trangHienTai - 1) . '" style="text-decoration: none">Prev</a> | ';
        }

        for ($i = 1; $i <= $tongTrang; $i++) {

            if ($i == $trangHienTai) {
                echo '<span>' . $i . '</span> | ';
            } else {
                echo '<a href="./index.php?controller=quanly&action=nguoi_dung_da_xoa&page=' . $i . '" style="text-decoration: none">' . $i . '</a> | ';
            }
        }
        if ($trangHienTai < $tongTrang && $tongTrang > 1) {
            echo '<a href="./index.php?controller=quanly&action=nguoi_dung_da_xoa&page=' . ($trangHienTai + 1) . '" style="text-decoration: none">Next</a> | ';
        }
        ?>
    </div>
</div>
