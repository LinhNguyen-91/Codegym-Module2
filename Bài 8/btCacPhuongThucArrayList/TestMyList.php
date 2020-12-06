<?php
include_once ('MyList.php');
$mang = new MyList(5,['đào','mận','cam','bưởi','xoài']);

$mang->addAll([1,2,3]);

var_dump($mang->elements);
$mang->reset();
var_dump($mang->elements);