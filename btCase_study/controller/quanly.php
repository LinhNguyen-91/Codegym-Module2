<?php
include_once FODER_CHUA . '/model/nguoidung.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'danh_sach';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$trang = isset($_GET['page']) ? $_GET['page'] : 1;
$trangHienTai = $trang;
$data = new DataBase();
$doDai = 4;
$thongTin = 0;
$phanLoai = 0;

switch ($action) {
    case 'xoa_nguoi_dung':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $thongTin = $data->layTenNguoiDung($id);
            include_once FODER_CHUA . '/view/formquanly/xoa_nguoi_dung.php';
        } else {
            $id = $_POST['id'];
            $nguoiDung =  $data->layTenNguoiDung($id);
            $data->themNguoiDung($id, $nguoiDung);
            $data->xoaNguoiDung($id);
            header('Location:./index.php?controller=quanly&action=danh_sach&page='.$trang);
        }
        break;

    case 'khoi_phuc_nguoi_dung':
        $nguoiDung = $data->layTenNguoiDungDaXoa($id);
        $data->khoiPhucNguoiDung($nguoiDung);
        $data->xoaNguoiDungChon($id);
        header('Location: ./index.php?controller=quanly&action=nguoi_dung_da_xoa&page='.$trang);
        break;

    case 'tim_nguoi_dung':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $thongTin = $_POST['tim'];
            $tongNote = $data->tongNguoiDung($thongTin);
            $tongTrang = floor($tongNote / $doDai);
            $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

            if ($trangHienTai > $tongTrang) {
                $trangHienTai = $tongTrang;
            } 
            if ($trangHienTai < 1) {
                $trangHienTai = 1;
            }

            $batDau = ($trangHienTai - 1) * $doDai;
            $danhSach = $data->timKiemNguoiDung($thongTin, +$batDau, +$doDai);
            include_once FODER_CHUA . '/view/formquanly/danhsachnguoidung.php';
            break;
        }
       
    case 'tim_nguoi_dung_da_xoa':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $thongTin = $_POST['tim'];
            $tongNote = $data->tongNguoiDungDaXoa($thongTin);
            $tongTrang = floor($tongNote / $doDai);
            $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

            if ($trangHienTai > $tongTrang) {
                $trangHienTai = $tongTrang;
            } 
            if ($trangHienTai < 1) {
                $trangHienTai = 1;
            }

            $batDau = ($trangHienTai - 1) * $doDai;
            $danhSach = $data->timKiemNguoiDungDaXoa($thongTin, +$batDau, +$doDai);
            include_once FODER_CHUA . '/view/formquanly/nguoidungdaxoa.php';
            break;
        }

    case 'nguoi_dung_da_xoa':
        $tongNote =   $data->tongNguoiDungDaXoa();
        $tongTrang = floor($tongNote / $doDai);
        $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

        if ($trangHienTai > $tongTrang) {
            $trangHienTai = $tongTrang;
        }
         if ($trangHienTai < 1) {
            $trangHienTai = 1;
        }

        $batDau = ($trangHienTai - 1) * $doDai;
        $danhSach = $data->timKiemNguoiDungDaXoa('', $batDau, $doDai);
        include_once FODER_CHUA . '/view/formquanly/nguoidungdaxoa.php';
        break;

    default:
        $tongNote =   $data->tongNguoiDung();
        $tongTrang = floor($tongNote / $doDai);
        $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

        if ($trangHienTai > $tongTrang) {
            $trangHienTai = $tongTrang;
        }
         if ($trangHienTai < 1) {
            $trangHienTai = 1;
        }
        $batDau = ($trangHienTai - 1) * $doDai;
        $danhSach = $data->timKiemNguoiDung('', $batDau, $doDai);
        include_once FODER_CHUA . '/view/formquanly/danhsachnguoidung.php';
        break;
}
