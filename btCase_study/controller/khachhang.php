<?php
include_once FODER_CHUA . '/model/CURD.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'danh_sach';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$trang = isset($_GET['page']) ? $_GET['page'] : 1;
$trangHienTai = $trang;
$data = new DataBase();
$doDai = 4;
$thongTin = 0;
$phanLoai = 0;

switch ($action) {

    case 'them_khach_hang':
        include_once FODER_CHUA . '/view/them.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ghiChu = new GhiChu($_POST['tieude'], $_POST['noidung'], $_POST['phanloai']);
            $data->create($user, $ghiChu);
            $tongNote =   $data->sumNoteUser($user);
            $trang = floor($tongNote / $doDai) + 1;
            header('Location: index.php?action=danh_sach&page=' . $trang);
        }
        break;

    case 'sua_thong_tin':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $thongTin = $data->getID($id);
            include_once FODER_CHUA . '/view/sua.php';
        } else {
            $trang = +$_POST['trang'];
            $id = $_POST['id'];
            $ghiChu = new GhiChu($_POST['tieude'], $_POST['noidung'], $_POST['phanloai']);
            $data->update($ghiChu, $id);
            header('Location: index.php?controller=khachhang&action=danh_sach&page=' . $trang);
        }
        break;

    case 'xoa_khach_hang':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $thongTin = $data->getID($id);
            include_once FODER_CHUA . '/view/xoa.php';
        } else {
            $trang = +$_POST['trang'];
            $id = $_POST['id'];
            $id2 = $data->getUser($user);
            $ghiChu =  $data->getID($id);
            $data->createId($id2, $ghiChu);
            $data->delete($id);
            header('Location: index.php?action=danh_sach&page=' . $trang);
        }
        break;

    case 'chi_tiet':
        $thongTin = $data->getID($id);
        include_once FODER_CHUA . '/view/chitiet.php';
        break;

    case 'tim_thong_tin':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $thongTin = $_POST['tim'];
            $phanLoai = +$_POST['phanloai'];
            $tongNote = $data->tongNoteTim($user, $thongTin, $phanLoai);
            $tongTrang = floor($tongNote / $doDai);
            $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

            if ($trangHienTai > $tongTrang) {
                $trangHienTai = $tongTrang;
            }
            if ($trangHienTai < 1) {
                $trangHienTai = 1;
            }

            $batDau = (+$trangHienTai - 1) * $doDai;
            $danhSach = $data->search($user, $thongTin, $phanLoai, +$batDau, +$doDai);
            include_once FODER_CHUA . '/view/hien_danh_sach.php';
            break;
        }

    case 'note_xoa':
        $id = $data->getUser($user);
        $tongNote = $data->tongNoteXoa($id);
        $tongTrang = floor($tongNote / $doDai);
        $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

        if ($trangHienTai > $tongTrang) {
            $trangHienTai = $tongTrang;
        }
        if ($trangHienTai < 1) {
            $trangHienTai = 1;
        }
        $batDau = ($trangHienTai - 1) * $doDai;
        $danhSach = $data->getAllXoa($id, $batDau, $doDai);
        include_once FODER_CHUA . '/view/hien_danh_sach_xoa.php';
        break;

    case 'khoi_phuc_note':
        $noteKhoiPhuc = $data->getNodeXoa($id);
        if ($noteKhoiPhuc) {
            $tieuDe = $noteKhoiPhuc['titele'];
            $noiDUng = $noteKhoiPhuc['content'];
            $phanLoai = $noteKhoiPhuc['type_id'];
            $ghiChu = new GhiChu($tieuDe, $noiDUng, $phanLoai);
            $data->createNote($id, $user, $ghiChu);
            $data->deleteNoteXoa($id);
        }
        header('Location: index.php?controller=danhsach&action=note_xoa&page=' . $trang);
        break;

    case 'tim_note_xoa':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $thongTin = $_POST['tim'];
            $phanLoai = +$_POST['phanloai'];
            $tongNote = $data->tongNoteTimXoa($user, $thongTin, $phanLoai);
            $tongTrang = floor($tongNote / $doDai);
            $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

            if ($trangHienTai > $tongTrang) {
                $trangHienTai = $tongTrang;
            }
            if ($trangHienTai < 1) {
                $trangHienTai = 1;
            }
            $batDau = ($trangHienTai - 1) * $doDai;
            $id = $data->getUser($user);
            $danhSach = $data->timNoteXoa($id, $thongTin, $phanLoai, $batDau, $doDai);
            include_once FODER_CHUA . '/view/hien_danh_sach_xoa.php';
            break;
        }

    default:
        $tongNote =   $data->sumNoteUser($user);
        $tongTrang = floor($tongNote / $doDai);
        $tongTrang = ($tongNote % $doDai == 0) ? $tongTrang : $tongTrang + 1;

        if ($trangHienTai > $tongTrang) {
            $trangHienTai = $tongTrang;
        }
        if ($trangHienTai < 1) {
            $trangHienTai = 1;
        }
        $batDau = ($trangHienTai - 1) * $doDai;
        $danhSach = $data->noteTrang($user, $batDau, $doDai);
        include_once FODER_CHUA . '/view/hien_danh_sach.php';
        break;
}
