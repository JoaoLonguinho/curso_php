<?php

$n = 22;

echo "$n <br/>";

$b =& $n;

echo "$b <br/>";

$b = 3;

echo "$b <br/>";

echo "$n <br/>";

$n = 27;

echo "$b <br/>";

echo "$n <br/>";