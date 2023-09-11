<?php

    // Float
    /**
     * King of unexpected behavior
     */

  $float = 1.234;
  $float = 1.2e3; // 1200 (1.2 * 10^3) although number is integer but it's float type

  echo PHP_FLOAT_MAX; // 1.7976931348623E+308

  // Should be aware when working with floats numbers are thier limited precision
  $x = (0.1 + 0.7) * 10; // 8? nope! 7.999999999999999
  echo floor($x); // 7

  /**
   * the reason for that is don't exactly have an exact representation as the floating number in the base binary
   * and binary is used to internally to store the floating number
   * therfore when we convert this floating number to binary, they losses some of percision 
   */

   $y = (0.1 + 0.2) * 19;
    echo floor($y); // 3 ??!! WTF
    echo ceil($y); // 4 !!! WTF

    // 3: 52

    // Don't Trust Floating-Point Number Results
    // And Never Ever Compare Floating number for Equallity ===


    $n1 = 0.23;
    $n2 = 1 - 0.77; // as we know it's 0.23
  
    // but it's not equal

    if ($n1 === $n2) {
      echo "Equal";
    } else {
      echo "Not Equal"; // Not Equal
    }


    // NAN
    // NAN is a special value that stands for Not A Number
    
    $nan = acos(8); // NAN

    // come operations, calculations might return NAN

    log(-1); // NAN

    // echo "name" + 1; // NAN in JavaScript (in PHP TypeError))
    
    // INF
    // any number divided by zero is INF
    // Push over the limit of float number will be INF

    // is_nan() function to check if the value is NAN
    // is_infinite() function to check if the value is INF (out bounds of float number)
    // is_finite() function to check if the value is finite (in bounds float) (not INF)


    // Casting
    $foo = 10;   // $foo is an integer
    echo (float) $foo; // 10.0
    echo (int) "5.2"; // 5
    
    echo (float) "John Doe"; // 0