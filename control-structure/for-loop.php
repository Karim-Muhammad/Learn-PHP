<?php

/**
 * Video : https://youtu.be/NhXvpHB_PMQ?si=EFIz3hX9w8EQ8xr0
 */

// PHP Support 4 types of loops
// 1. for
// 2. while
// 3. do while
// 4. foreach

// for loop
// for(initialization; condition; increment/decrement){
//   // code to be executed
// }

for($i = 0; $i < 10; $i++){
  echo $i . "<br>";
}

// while loop
// while(condition){
//   // code to be executed
// }

$i = 0;
while($i < 10){
  echo $i . "<br>";
  $i++;
}

// do while loop
// do{
//   // code to be executed
// }while(condition);

$i = 0;
do{
  echo $i . "<br>";
  $i++;
}while($i < 10);

// foreach loop
// foreach($array as $value){
//   // code to be executed
// }

$fruits = ["Apple", "Banana", "Orange"];
foreach($fruits as $fruit){
  echo $fruit . "<br>";
}

// foreach loop with key
// foreach($array as $key => $value){
//   // code to be executed
// }

$fruits = ["Apple", "Banana", "Orange"];
foreach($fruits as $key => $fruit){
  echo $key . " " . $fruit . "<br>";
}

// break and continue
// break - to break out of the loop
// continue - to skip the current iteration

$i = 0;
while($i < 10){
  if($i === 5){
    break; // break can be accept a number to break out of nested loops
  }
  echo $i . "<br>";
  $i++;
}

$i = 0;
while($i < 10){
  $j = 0;
  while($j <= $i){
    echo $i . " " . $j. "<br>";

    if($j === 5){
      break 2; // this will break 2 levels of loop block
    }

    $j++;
  }
  echo "<br/> ================================ <br/>";
  $i++;
}

// break <number-of-levels> - to break out of nested loops
// continue <number-of-levels> - to skip the current iteration of nested loops

// we can use while in HTML but with colon syntax (alternative syntax)
echo "<br/> ================================ <br/>";

while($i < 10):
  echo $i . "<br>";
  $i++;
endwhile;

echo "<br/> ================================ <br/>";

// More Expressions in for loop
for($i = 0; $i < 10; print $i, $i++) {
  // code to be executed
}

echo "<br/> ================================ <br/>";

for($i = 0;  print $i, $i < 10; $i++) {
  // code to be executed
}

// condition expression will be determined with last expression in for loop

echo "<br/> ================================ <br/>";
for($i = 0; $i < 10; $i++):
  echo $i . "<br>";
endfor;


echo "<br/> ================================ <br/>";
$string = "Karim";

for($i = 0; $i < strlen($string); $i++):
  echo $string[$i] . "<br>";
endfor;

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo "<br/> ================================ <br/>";
for($i = 0; $i < count($array); $i++):
  echo $array[$i] . "<br>";
endfor;

echo "<br/> ================================ <br/>";

// There is a Performacne Issue here, we call strlen(), count() functions in each iteration

// Solution 1
for($i = 0, $length = count($array); $i < $length; $i++):
  echo $array[$i] . "<br>";
endfor;

// now count() function called once time only and stored in $length variable


// Solution 2 - use foreach loop
foreach($array as $value):
  echo $value . "<br>";
endforeach;

// Each iterable current element will be assigned to $value by value.

// if we want to assign by reference for modifying the value of the current element, use &$value instead of just $value

foreach($array as &$value) {
  $value = $value * 2; // [2, 4, 6, 8, 10, 12, 14, 16, 18]
}

// TIP: $value variable will be still available after foreach loop -> 10:12
$value = 181818;
echo $value; // 181818

// to avoid this we can use unset($value) after foreach loop to make it unavailable

print_r($array); // Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 [5] => 12 [6] => 14 [7] => 16 [8] => 181818 !!!
// $value variable will be still available after foreach loop, and we modified the last element in the array with 181818


echo "<br/> ================================ <br/>";


/**
 * json_encode() - Returns the JSON representation of a value
 * implode() - Join array elements with a string
 * var_export() - Outputs or returns a parsable string representation of a variable
 */

 echo json_encode($array); // [2,4,6,8,10,12,14,16,181818]