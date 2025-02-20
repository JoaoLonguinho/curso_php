<?php

header("Content-type: text/plain");

$str1 = "            J O    ã      O                  .";

echo "String 1: " . $str1 . "\n";

$strTotalClean = trim($str1);

echo "String 2: " . $strTotalClean . "\n";

$strLeftClean = ltrim($str1);

echo "String 3: " . $strLeftClean . "\n";

$strRightClean = rtrim($str1);

echo "String 4: " . $strRightClean . "\n";
