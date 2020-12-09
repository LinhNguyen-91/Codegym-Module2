<?php
function kiemTraEmail( $email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    if (preg_match_all($pattern, $email)) {
        echo "Hợp lệ";
    } else {
        echo "Không hợp lệ";
    }
}
kiemTraEmail('a@gmail.com');
echo '<br/>';
kiemTraEmail('@gmail.com');
echo '<br/>';
kiemTraEmail('ab@yahoo.com');
echo '<br/>';
kiemTraEmail('ab@gmail.');
echo '<br/>';
kiemTraEmail('abc@hotmail.com');
