<div class="tongthe">
    <div class="container">
        <div class="row" style="padding-top: 15px">
            <div class="col-lg-10">
                <h1> <a href="./index.php?action=danh_sach" style="text-decoration: none;">GHI CHÚ</a></h1>
            </div>
            <div class="col-lg-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Xin chào <?= $user ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="./formdangnhap/doimatkhau.php?user=<?= $user ?>">Đổi mật khẩu</a></li>
                        <li> <a class="dropdown-item" href="./index.php?&action=note_xoa">Ghi chú đã xóa</a></li>
                        <li> <a class="dropdown-item" href="index.php?action=them_khach_hang">Thêm ghi chú</a></li>
                        <li> <a class="dropdown-item" href="formdangnhap/dangxuat.php?page=<?= $trang ?>">Đăng Xuất</a></li>
                </div>
            </div>
        </div>

        <br>

        <form action="./index.php?action=tim_thong_tin" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" style="color: #000099" placeholder="Tìm kiếm ..." name="tim" class="form-control">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i></button>
                        <select name="phanloai" class="btn btn-info dropdown-toggle">
                            <option value="1">Cá nhân</option>
                            <option value="2">Công ty</option>
                        </select>
                    </td>
                </tr>


            </table>

        </form>
        </br>
        </br>
        </br>
        <div class="row">
            <div class="col-lg-9">
                <h5 style="color: #000099"><?php
                                            if (($thongTin != 0) or ($phanLoai != 0)) {
                                                if ($phanLoai) {
                                                    if ($phanLoai == 1) {
                                                        $congViec = 'cá nhân';
                                                    } else {
                                                        $congViec = 'công ty';
                                                    }
                                                }
                                                echo 'Đang tìm kiếm ' . $thongTin . ' trong ' . $congViec;
                                            } else {
                                                echo 'Danh sách đầy đủ';
                                            }
                                            ?>
                </h5>
            </div>
            <div class="col-lg-3">
                <h5 style="color: #000099">Bạn có <?= $tongNote ?> ghi chú trong <?= $tongTrang ?> trang </h5>
            </div>
        </div>
        </br>

        <?php foreach ($danhSach as $key => $value) : ?>

            <div class="khoi2">
                <div class='layer2'>
                    <div>
                        <h4 class="sothutu" style="float: left; color:red;font-weight:bold"><?= '__' . ++$key + $batDau . '__' ?></h4>

                        <div class="thaotac" style="float: right;margin-right:10px">
                            <a href="./index.php?action=sua_thong_tin&id=<?= $value['id'] ?>&page=<?= $trangHienTai ?>" class="panel-title" style="text-decoration: none;color:blue;">...</a>
                            <a href="./index.php?action=xoa_khach_hang&id=<?= $value['id'] ?>&page=<?= $trangHienTai ?>" class="panel-title" style="text-decoration: none;color:blue;">X</a>
                        </div>
                    </div>
                    <div class="tieude" style="padding-top:70px;">
                        <a href="./index.php?action=chi_tiet&id=<?= $value['id'] ?>&page=<?= $trangHienTai ?>" style="text-decoration: none;
                                font-size:110%;
                                     color: blue; "> <?= $value['titele'] ?></a>

                    </div>
                    <div class="phanloai" style="padding-top:55px;">
                        <h5> <?= $value['type_id'] ?></h5>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>
    </div>
    <div class="phantrang">
        <?php

        if ($trangHienTai > 1 && $tongTrang > 1) {
            echo '<a href="index.php?page=' . ($trangHienTai - 1) . '" style="text-decoration: none">Prev</a> | ';
        }


        for ($i = 1; $i <= $tongTrang; $i++) {

            if ($i == $trangHienTai) {
                echo '<span>' . $i . '</span> | ';
            } else {
                echo '<a href="index.php?page=' . $i . '" style="text-decoration: none">' . $i . '</a> | ';
            }
        }

        if ($trangHienTai < $tongTrang && $tongTrang > 1) {
            echo '<a href="index.php?page=' . ($trangHienTai + 1) . '" style="text-decoration: none">Next</a> | ';
        }
        ?>
    </div>

</div>

