<?php
function selectionSort($list)
{
    for ($x = 0; $x < count($list); $x++) {
        $chiSo = $x;
        $max = $list[$x];
        for ($y = $x + 1; $y < count($list); $y++) {
            if ($list[$y] > $max) {
                $chiSo = $y;
                $max = $list[$y];
            }
        }

        $temp = $list[$chiSo];
        $list[$chiSo] = $list[$x];
        $list[$x] = $temp;
    }
    return $list;
}
$mang =  [1,9,4.5,6.6,5.7,-4.5];
var_dump(selectionSort($mang));
