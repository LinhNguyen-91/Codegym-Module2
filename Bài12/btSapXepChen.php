<?php
function  insertionSort($list)
{
    for ($x = 1; $x < count($list); $x++) {
        $viTri = $x;

        for ($y = $x - 1; $y >= 0; $y--) {
            if ($list[$x] < $list[$y]) {
                $viTri = $y;
                continue;
            }
            break;
        }

        $temp = $list[$x];

        for ($i = $x - 1; $i >= $viTri; $i--) {
            $list[$i + 1] = $list[$i];
        }
         $list[$viTri] = $temp;
    }
    for ($a = 0; $a < count($list); $a++) {
        echo $list[$a] . '<br/>';
    }
}

$mang =  [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
insertionSort($mang);
