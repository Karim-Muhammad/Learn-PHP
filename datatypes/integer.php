<?php

$int = 1234; // decimal number
$int = -123; // a negative number

$int = 0123; // octal number (equivalent to 83 decimal)
$int = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$int = 0b11111111; // binary number (equivalent to 255 decimal)


echo PHP_INT_MAX; // int(9223372036854775807)
var_dump(PHP_INT_MAX + 1); // float(9.2233720368548E+18) !!


// casting
$foo = 10;   // $foo is an integer
echo (int) "5.2"; // 5
echo (int) true; // 1
echo (int) false; // 0

echo (int)"String"; // 0 !!
echo (int)"45 String 11"; // 45

// round
echo round(1.95583, 2); // 1.96
echo round(5.045, 2); // 5.05
echo round(1241757, -3); // 1242000

$readable_number = 100_000; // 100000
$readable_number = 1_000_000; // 1000000

echo (int) $readable_number; // 1 (only!) because '_' treated as string
