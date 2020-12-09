<?php
function kiemTraAccount( $account)
{
    $pattern = '/^[_a-z0-9]{6,}$/';

    if (preg_match_all($pattern, $account)) {
        echo "Hợp lệ";
    } else {
        echo "Không hợp lệ";
    }
}
kiemTraAccount('123abc_');
echo '<br/>';
kiemTraAccount('______');
echo '<br/>';
kiemTraAccount('.@');
echo '<br/>';
kiemTraAccount('12345');
echo '<br/>';
kiemTraAccount('abcde ');
