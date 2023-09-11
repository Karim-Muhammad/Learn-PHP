<?php

  /**
   * Video : https://youtu.be/gCVlQdbddXY?si=mAaxi8Z13c83j9iY
   */

   
  // Error Control Operator @
  // @ is used to hide errors
  // it is used before the expression

  $x = file("not-exists.txt"); // Warning: file(not-exists.txt): failed to open stream: No such file or directory in C:\xampp\htdocs\php\operators\comparison2.php on line 5
  $x = @file("not-exists.txt"); // no error shown

  /**
   * it is not recommended to use @ unless you really really have good use case for it
   * like suppress some API calls
   */


  //  ==============================================
  // increment/decrement operators (used with numbers & strings (increment only)))
  // ==============================================

  // Pre-increment
  $x = 5;
  echo ++$x; // 6
  echo "<br/>";

  // Post-increment
  $x = 5;
  echo $x++; // 5
  echo "<br/>";
  echo $x; // 6 (now)
  echo "<br/>";

  // Pre-decrement
  $x = 5;
  echo --$x; // 4
  echo "<br/>";

  // Post-decrement
  $x = 5;
  echo $x--; // 5
  echo "<br/>";
  echo $x; // 4 (now)
  echo "<br/>";

  // ==============================================
  // Strings
  // ==============================================

  $x = "5";
  $n = "L";
  $n2 = "M";
  echo ++$x; // 6
  echo "<br/>";
  echo ++$n; // M
  echo "<br/>";
  echo --$n2; // still M! (Strings only affected by "increment" ONLY!)
  echo "<br/>";


  // ==============================================
  // TIP: increment/decrement operators (used with numbers & strings ("L"++ => "M"))
  // ==============================================


  // ==============================================
  // Logical Operators (&& = and, || = or, !, ^ = xor)
  // ==============================================

  $x = true;
  $y = false;
  $r = $x and $y;

  echo $r; // 1 (true) !!!!
  echo "<br/>";

  // and, or are lower precedence than =, so it will be evaluated first


  // ==============================================
  // Bitwise Operators (&, |, ^, ~, <<, >>)
  // ==============================================
  // 2 => 010
  // 5 => 101
  // 6 => 110
  // 7 => 111
  // 10 => 1010

  echo 5 & 6; // 4 (100)
  echo "<br/>";
  echo 5 | 6; // 7 (111)
  echo "<br/>";
  echo 5 ^ 6; // 3 (011)
  echo "<br/>";
  echo 2 & 5; // 0 (000)
  echo "<br/>";
  echo 2 | 5; // 7 (111)
  echo "<br/>";
  echo 10 & 5; // 0 (000)
  echo "<br/>";


  // ~ - flips all bits
  // 2 => 010
  // ~2 => 11111111 11111111 11111111 11111[101] (-3)

  echo ~2; // -3 (1111111 11111111 11111111 11111[101])

  // ==============================================
  // >> , << (shift operators) (either `multiply` or `divide` by 2)
  // shift base to the left we multiply by 2 (2 << 1 => 4)
  // shift base to the right we divide by 2 (2 >> 1 => 1)
  // ==============================================

  // 2 => 010
  // 2 << 1 => 100 (4)
  // 2 << 2 => 1000 (8)
  // 2 << 3 => 10000 (16)

  // 3 => 011
  // 3 << 1 => 110 (6)
  // 3 << 2 => 1100 (12) (shift left by 2 bits)

  echo "<br/>";
  // Summary
  echo 5 << 5; // 101[00000] (160) - 5 zeros in right side - means ones in left side
  echo "<br/>";
  echo 128 >> 5; // 01000000 -> 010 (4) - discard 5 zeros in right side - means ones in left side  
  echo "<br/>";

  // ==============================================
  // With Strings
  // ==============================================

  // if operands are strings, Bitwise operators will deal with ASCII values of letters


  // ==============================================
  // Use Cases
  // ==============================================

  // 1. used in configuration PHP file
  // 2. used in database to store permissions instead of storing in separate table and do joins
  // 3. used for encryption
  // 4. store some flags


  // Some Operators works a bit differently with arrays

  // + (union) - returns the union of the arrays (all the values that are in any of the arrays) that doesn't exist in the other array in same index

  $ar1 = ['a', 'b', 'c'];
  $ar2 = ['d', 'e', 'f'];

  $result = $ar1 + $ar2; // ['a', 'b', 'c'] ONLY (because other values exist in other array in same index in other array)
  print_r($result); // Array ( [0] => a [1] => b [2] => c )
  echo "<br/>";
  
  $ar3 = ['d', 'e','f', 'g', 'h'];
  $result = $ar1 + $ar3; // ['a', 'b', 'c', 'g', 'h'] ONLY g, h append because thier index doesn't exist in first array (other values exist in first array in same index)
  print_r($result); // Array ( [0] => a [1] => b [2] => c [3] => g [4] => h )
  echo "<br/>";

  // so we append element of second array to first array if 'its indexes doesn't exist' in first array


  // ==============================================
  // Array Comparison
  // ==============================================

  // Loose Comparison check if arrays have same key/value pairs doesn't care about order, datatype
    // key will be casted to integer if it is string contains numeric value only
    // Key will not be casted to integer if it is string contains non-numeric value
  // Strict Comparison check if arrays have same key/value pairs and "same order" and "same datatype"

  $ar1 = ['a', 'b', 'c'];
  $ar2 = ['d', 'e', 'f'];
  $ar3 = ['1', 2, '2'];
  $ar4 = [1, 2, 2];

  var_dump($ar1 == $ar2); // false
  echo "<br/>";
  var_dump($ar3 == $ar4); // (loose comparison) true '2' == 2
  echo "<br/>";
  var_dump($ar3 === $ar4); // (strict comparison) false '2' !== 2