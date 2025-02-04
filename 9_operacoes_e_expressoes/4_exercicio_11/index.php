<?php

$a = "5";
$b = 12;
$c = $a * $b;
echo $c . "<br/>";

echo gettype($c);
echo "<br/>";
echo gettype([]);
echo "<br/>";
echo gettype('string');
echo "<br/>";
echo gettype(12.12);