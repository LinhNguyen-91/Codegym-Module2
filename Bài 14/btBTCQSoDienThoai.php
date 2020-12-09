<?php
function kiemTraSoDt( $soDienThoai)
{
    $pattern = '/^\([0-9]{2}\)-\(0[0-9]{9}\)$/';

    if (preg_match_all($pattern, $soDienThoai)) {
        echo "Hợp lệ";
    } else {
        echo "Không hợp lệ";
    }
}
kiemTraSoDt('(84)-(0978489648)');
echo '<br/>';
kiemTraSoDt('(a8)-(22222222)');
echo '<br/>';

