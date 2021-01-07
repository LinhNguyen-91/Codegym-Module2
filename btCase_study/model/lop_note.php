<?php


class GhiChu
{
    public $tieude;
    public $noidung;
    public $phanloai;

    public function __construct($tieude,$noidung,$phanloai)
    {
        $this->tieude=$tieude;
        $this->noidung=$noidung;
        $this->phanloai=$phanloai;
    }
}