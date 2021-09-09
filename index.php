<?php

require("Shape.php");
require("Rectangle.php");
require("Circle.php");

$rect = new Rectangle(4,2);
$rect->setName("Rectange_1");

echo "Area of " . $rect->getName() . ": " . $rect->calculateArea();

echo PHP_EOL;

echo "get clone of " . $rect->getName() . " ";
print_r($rect->getClone());

echo PHP_EOL;

$circ = new Circle(2);
$circ->setName("Circle_1");

echo "Area of " . $circ->getName() . ": " . $circ->calculateArea();

echo PHP_EOL;

echo "get clone of " . $rect->getName() . " ";
print_r($circ->getClone());