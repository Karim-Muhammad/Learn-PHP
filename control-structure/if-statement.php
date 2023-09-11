<?php

// if, else, elseif, else if

$score = 85;
if($score > 95) {
  echo "A+";
}elseif ($score > 85) {
  echo "A";
}elseif ($score > 75) {
  echo "B";
}elseif ($score > 65) {
  echo "C";
}else if ($score > 50) { // it works in PHP, but not in HTML
  echo "D";
}else {
  echo "F";
}

// we can use else if instead of elseif, there is a `syntactic difference` between them
// when we will use alternative syntax that we use in HTML - when we embed if statment in html
// we use `elseif` (without space)

// alternative syntax that used in html
/*
  // <?php if(condition): ?>
  //   <h1>HTML</h1>
  // </php elseif (): ?> Correct
  // </php else if (): ?> Error
  // <?php endif; ?>
*/


// when we use if condition in html we use elseif (without space) otherwise will get error
// so stick with elseif, because we can use it in both cases (php and html) 