<?php
function kiemTraTenLop( $tenLop)
{
    $pattern = '/^[CAP][0-9]{4}[GHIKLM]$/';

    if (preg_match_all($pattern, $tenLop)) {
        echo "Hợp lệ";
    } else {
        echo "Không hợp lệ";
    }
}
kiemTraTenLop('C0318G');
echo '<br/>';
kiemTraTenLop('M0318G');
echo '<br/>';
kiemTraTenLop('P0323A');
