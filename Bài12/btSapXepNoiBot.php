<?php
function  bubbleSort($list)
{
    for ($x = 0; $x < count($list); $x++) {
        for ($y = 0; $y < count($list) - 1 - $x; $y++) {
            if ($list[$y] >$list[$y+1]){
                $temp = $list[$y+1];
                $list[$y+1] = $list[$y];
                $list[$y] = $temp;
            }
        }
    }
    for ($x = 0; $x < count($list); $x++) {
        echo $list[$x].'<br/>';
    } 
}
$mang =  [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
 bubbleSort($mang);