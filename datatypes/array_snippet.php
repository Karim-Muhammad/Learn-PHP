<?php
    $array = [0 => 'Zero', 1 => "One", 2 => "Two", 3 => "Three"];
    /*  */
    // unset($array[0], $array[1], $array[2], $array[3]); // now array is empty
    // array_push($array, "One"); // [4 => "One"] // not 0 => "One" (no re-indexing)

    /* Snippet 1 */
    // ==============================================
    // array_shift($array); // [0 => "One", 1 => "Two", 2 => "Three"] (re-indexing)
    // array_push($array, "One"); // [..., 3 => "One"]
    // ==============================================

    /* Snippet 2 */
    // =============================================
    //  array_pop($array); // [0 => "Zero", 1 => "One", 2 => "Two"]
    //  array_push($array, "One"); // [..., 3 => "Three"]
    //  print_r($array);
    // =============================================

    /* Snippet 3 */
    // ============================================
    // $input = array("red", "green", "blue", "yellow");
    // array_splice($input, 2, 1);
    // var_dump($input);
    // ==========================================

    /* Snippet 4 */
    // ============================================
    $first = [1, 2, '2 books' => 3, 4, 5];
    $second = [1, '2', 3, 5, 4];

    // key that has numeric value will be casted to int
    // key that has string value will be casted to string (even if it has numeric value)

    if ($first == $second) {
        echo "Equal";
    } else {
        echo "Not Equal";
    }
    // ============================================

?>