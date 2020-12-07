<?php
function doiNhiPhanThapPhan($num){

    if($num === 0){
        return;
    }

    $phanDu = $num % 2;
    $phanNguyen = intval(floor($num / 2));

    return doiNhiPhanThapPhan($phanNguyen).$phanDu;
}

echo doiNhiPhanThapPhan(40);