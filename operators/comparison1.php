<?php
  /**
   * Video: https://youtu.be/t8U2FGjjqM8?si=_TqpDHQhjj8Hwlyq
   * Useful Article 1: https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.types 
   * Useful Article 2: https://www.php.net/manual/en/types.comparisons.php
   * Useful Article 3: https://wiki.php.net/rfc/string_to_number_comparison
   */

  // Comparison Operators
  // ==, ===, !=, !==, <>, <, >, <=, >=, <=> ?? ?:

  // == (equal) - returns true if both operands are equal in value
  // === (identical) - returns true if both operands are equal in value and data type
  // != (not equal) - returns true if both operands are not equal in value
  // <> (not equal) - returns true if both operands are not equal in value (same as !=)
  // !== (not identical) - returns true if both operands are not equal in value and data type
  // < (less than) - returns true if left operand is less than right operand
  // > (greater than) - returns true if left operand is greater than right operand
  // <= (less than or equal to) - returns true if left operand is less than or equal to right operand
  // >= (greater than or equal to) - returns true if left operand is greater than or equal to right operand
  // <=> (spaceship) - returns 0 if both operands are equal, 1 if left operand is greater than right operand, -1 if left operand is less than right operand
  // ?? (null coalescing) - returns left operand if it is not null, otherwise returns right operand
  // example
  $x = 5;
  $y = 10;
  $z = 5;
  $k = "5";

  // echo 1 / 3; // float
  // echo 6 / 2; // int
  // echo 6.0 / 2; // float

  // all result in division is float unless both operands are int and the result is int

  // Division by zero
  // echo 1 / 0; // warning: Division by zero (before Php 8 was giving `Warning`)
  // in PHP 8 it gives `Fatal Error`
  // but in case we want avoid this Error we can use fdiv() function

  echo fdiv(1, 0); // INF (infinity)
  echo "<br/>";

  // ==============================================
  // Modulus (cont. Tricks)
  // ==============================================
  echo 5 % 2; // 1
  echo "<br/>";

  echo 5 % 2.5; // 1 (operands will be casted to int) 2.5 => 2
  echo "<br/>";

  // if you wan perform modulus on float numbers you can use fmod() function
  echo fmod(5, 2.5); // 0.0
  echo "<br/>";
  echo fmod(5, 2.1); // 0.8
  echo "<br/>";

  // Negative Result
  // Result take the sign from divisor
    // [divisor] % [0-9];

  echo -5 % 2; // -1
  echo "<br/>";
  echo 5 % 2; // 1
  echo "<br/>";
  echo -5 % -2; // -1
  echo "<br/>";
  echo 5 % -2; // 1
  echo "<br/>";

  // ==============================================
  // Assignment Operators
  // ==============================================
  // =, +=, -=, *=, /=, %=, **=, .=, &=, |=, ^=, <<=, >>=
  // Copy by value
  $x = 5;
  $y = $x;
  $y = 10;
  echo $x; // 5
  echo "<br/>";

  // Copy by reference
  $k = 5;
  $z = &$k;
  $z = 10;
  echo $k; // 10
  echo "<br/>";

  // ==============================================
  // _BEFORE_ PHP 8 (php 7.4 for example) 10:00
  // https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.types
  // ==============================================
  echo "<br/>";
  if(0 == 'hello') echo "Equal"; // Equal
  else echo "Not Equal";

  // this expression is true because php will cast 'hello' to int and it will be 0 !!!
  // but in _php 8_ when string has `not numeric value`, other side will be casted to string
  // then perform string comparison
  
  // PHP 8
  echo "<br/>";
  if(0 == 'hello') echo "Equal"; // 0 will be casted to string and it will be '0'
  else echo "Not Equal"; // Not Equal


  // but if string has `numeric value`, string will be casted to number
  // then perform numeric comparison

  // ==============================================
  // Ternary Operator
  // ==============================================
  // ?: (ternary) - returns left operand if it is true, otherwise returns right operand

  // ==============================================
  // Null Coalescing Operator
  // ==============================================
  $x = null;
  $y = $x ?? 5; // 5

  $y = $undeclaredVariable ?? 5; // 5 (no error will appear)