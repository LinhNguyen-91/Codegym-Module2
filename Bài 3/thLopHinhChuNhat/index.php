<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 18:53
 */

include "Rectangle.php";

$width  = 10;
$height = 20;

$rectangle = new Rectangle($width, $height);

echo $rectangle->width; // 0utput: 10
echo '<br/>';
echo $rectangle->height; // 0utput: 20
echo '<br/>';
$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height; // 0utput: 30
echo '<br/>';
echo $rectangle->width; // 0utput: 20
echo '<br/>';
echo $rectangle->getPerimeter(); // 0utput: 100
echo '<br/>';
echo $rectangle->getArea(); // Output: 600
echo '<br/>';

echo ("Your Rectangle" . $rectangle->display());
