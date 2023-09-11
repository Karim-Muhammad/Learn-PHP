<?php

  $text = <<< TEXT
  LINE 1
  LINE 2
  LINE 3
  TEXT;

  echo $text;
  /**
   * in Console:
   * LINE 1
   * LINE 2
   * LINE 3
   */

  // in HTML: LINE 1 LINE 2 LINE 3

  // Because new line in HTML is `<br />` not `\n`
  // So we need to use nl2br() function

  echo nl2br($text);
  // in Console: LINE 1 <br/>LINE 2 <br/>LINE 3 <br/>
  /**
   * in HTML:
   *  LINE 1
   *  LINE 2
   *  LINE 3
   */
