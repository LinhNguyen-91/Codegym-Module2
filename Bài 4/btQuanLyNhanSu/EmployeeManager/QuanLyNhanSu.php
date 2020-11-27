<?php

namespace Quanlynhansu;

class QuanLyNhanSu
{
    private $nhansu;

    public function __construct()
    {
        $this->nhansu = [];
    }
    public function themNhanSu($nhansu)
    {
        $this->nhansu[] = $nhansu;
    }
    public function getNhanSu()
    {
        return $this->nhansu;
    }
    public function xoaNhanSu($ma)
    {
        $viTri = null;
        // Tìm được vị trí của phần tử có $id là $ma ở trong mảng
        for($i = 0; $i < count($this->nhansu); $i++) {
            if($this->nhansu[$i]->getId() == $ma) {
                $viTri = $i;
                break;
            }
        }

        if($viTri != null) {
            array_splice($this->nhansu, $viTri, 1);
        }
    }
}
