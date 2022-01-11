<?php
include_once "Rectangle.php";

$firstRect = new Rectangle(20, 10);
echo $firstRect->display();
echo "Chu vi: " .$firstRect->getPerimeter();
echo "Dien tich: " .$firstRect->getArea();