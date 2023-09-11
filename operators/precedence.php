<?php

  /**
   * Video : https://youtu.be/pmX_-x3LX-k?si=3-rs9OG4zCUHHVRE
   * IMPORTANT
   */

  // ==============================================
  // Precedence
  // ==============================================

  // Operators precedence
  // https://www.php.net/manual/en/language.operators.precedence.php

  // 1. Assignment Operator has Lowest Precedence
  // and, or, more lowest than assignment operator
  $t = true;
  $z = $t and false; // first $z = $t, so not $z = true

  /**
   * Operators of equal precedence that are non-associative cannot be used next to each other,
   * for example 1 < 2 > 1 is invalid in PHP.
   */


  //  So Recommended to use Parentheses to avoid confusion, and don't reylying on precedence and associativity
  // make your code more readable, and clear