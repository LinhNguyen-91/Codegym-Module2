<?php

namespace Nhansu;

class NhanSu
{
    static $soThuTu = 0;
    private $id;
    private $ho;
    private $ten;
    private $ngaysinh;
    private $diachi;
    private $vitri;

    public function __construct($ho, $ten, $ngaysinh, $diachi, $vitri)
    {
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->diachi = $diachi;
        $this->vitri = $vitri;
        $this->id = ++self::$soThuTu;
    }

    public function getId() {
        return $this->id;
    }

    public function getHo()
    {
        return $this->ho;
    }
    public function setHo($ho)
    {
        $this->ho = $ho;
    }
    public function getTen()
    {
        return $this->ten;
    }
    public function setTen($ten)
    {
        $this->ten = $ten;
    }
    public function getNgaySinh()
    {
        return $this->ngaysinh;
    }
    public function setNgaySinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;
    }
    public function getDiaChi()
    {
        return $this->diachi;
    }
    public function setDiaChi($diachi)
    {
        $this->diachi = $diachi;
    }
    public function getViTri()
    {
        return $this->vitri;
    }
    public function setViTri($vitri)
    {
        $this->vitri = $vitri;
    }
}
