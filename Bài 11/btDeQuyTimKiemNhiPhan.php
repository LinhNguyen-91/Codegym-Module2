<?php
function deQuyTimNhiPhan($mang,$giaTri){
    if(count($mang)==0)
        return false;
    $mid = floor(count($mang)/2);
    $midValue = $mang[$mid];

    if ($midValue == $giaTri)
        return true;
    if ($midValue >$giaTri){
        $mang = array_slice($mang,0,$mid-1);
        return deQuyTimNhiPhan($mang,$giaTri);
    }
    $mang = array_slice($mang,$mid+1);
    return deQuyTimNhiPhan($mang,$giaTri);
}



 $mang = [1,2,3,4,5,6,7];

echo deQuyTimNhiPhan($mang,9) ? "Có" : "Không";