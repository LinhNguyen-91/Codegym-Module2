<?php
include ('LopPoint.php');
include ('LopMoveablePoint.php');
 $point = new Point(2,3);
 echo $point->toString();
 $tocDo = new MovablePoint(2,3,6.3,7);
 echo '<br/>';
 echo $tocDo->toString();
 var_dump($tocDo->getSpeed());