<?php
require_once "Point.php";
$firstP = new Point;
$firstP->x=4;
$firstP->y=-2;
$firstP->z=8;
$secP=new Point;
$secP->x=3;
$secP->y=10;
$secP->z=12;
$s=sqrt(($firstP->x-$secP->x)*($firstP->x-$secP->x)+($firstP->y-$secP->y)*($firstP->y-$secP->y)+($firstP->z-$secP->z)*($firstP->z-$secP->z));
echo $s;