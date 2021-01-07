<?php
include_once FODER_CHUA . '/model/lop_ket_noi.php';

class DataBase
{
    public $ketNoi;

    public function __construct()
    {
        $this->ketNoi = new KetNoi();
    }

    public function danhSachNguoiDung()
    {
        $sql = "SELECT *FROM dang_nhap";

        $resutls = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutls)) {
            $items[] = $row;
        }
        return $items;
    }

    public function tongNguoiDung($thongTin = '')
    {
        $sql = "SELECT *FROM dang_nhap WHERE gmail LIKE '%$thongTin%'";

        $resutls = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutls)) {
            $items[] = $row;
        }
        return count($items);
    }

    public function layTenNguoiDung($id)
    {
        $sql = "SELECT * FROM  dang_nhap WHERE id= '$id'";
        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        return mysqli_fetch_assoc($resutl);
    }

    public function themNguoiDung($id, $nguoiDung)
    {
        $gmail = $nguoiDung['gmail'];
        $matKhau = $nguoiDung['mat_khau'];
        $id_dangnhap = $nguoiDung['id'];
        $sql = "INSERT INTO  xoa_dang_nhap (gmail,mat_khau,id_dangnhap) VALUE ('$gmail','$matKhau','$id_dangnhap')";

        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function xoaNguoiDung($id)
    {
        $sql = "DELETE FROM dang_nhap WHERE id = '$id'";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function tongNguoiDungDaXoa($timKiem = '')
    {
        $sql = "SELECT count(id) as total from xoa_dang_nhap WHERE gmail LIKE '%$timKiem%'";
        $result = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }

    public function timKiemNguoiDung($thongTin, $batDau, $doDai)
    {
        $sql = "SELECT 
                 * FROM dang_nhap
                 WHERE gmail LIKE '%$thongTin%'
                LIMIT $batDau,$doDai";

        $resutls = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutls)) {
            $items[] = $row;
        }
        return $items;
    }

    public function timKiemNguoiDungDaXoa($thongTin, $batDau, $doDai)
    {
        $sql = "SELECT  * FROM xoa_dang_nhap
                WHERE gmail LIKE '%$thongTin%'
                LIMIT $batDau,$doDai";

        $resutls = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutls)) {
            $items[] = $row;
        }
        return $items;
    }

    public  function layTenNguoiDungDaXoa($id)
    {
        $sql = "SELECT * FROM  xoa_dang_nhap WHERE id= '$id'";
        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        return mysqli_fetch_assoc($resutl);
    }

    public function khoiPhucNguoiDung($nguoiDung)
    {
        $gmail = $nguoiDung['gmail'];
        $matKhau = $nguoiDung['mat_khau'];
        $id = $nguoiDung['id_dangnhap'];

        $sql = "INSERT INTO  dang_nhap (id,gmail,mat_khau) VALUE ('$id','$gmail','$matKhau')";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function xoaNguoiDungChon($id)
    {
        $sql = "DELETE FROM xoa_dang_nhap WHERE id = '$id'";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }
}
