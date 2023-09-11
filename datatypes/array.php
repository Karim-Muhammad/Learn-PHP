<?php
    require_once("../helpers/array_log.php");
    /**
     * Video : https://youtu.be/C8ZFLq24g_A?si=tBbUt1_h4jZHafXZ
     */
    // Array
    $programmingLanguages = array("PHP", "JavaScript", "Python", "Java", "C++", "C#");
    $programmingLanguages = ["PHP", "JavaScript", "Python", "Java", "C++", "C#"];

    // You cannot access from back (-1) unlike string access
    echo "Karim"[-1]; // m
    echo $programmingLanguages[-1]; // Notice: Undefined offset: -1

    var_dump($programmingLanguages[10]); // NULL (no value at index 10)


    // add another element
    $programmingLanguages[] = "C"; // note: we didn't specify the index
    // equivalent to
    $programmingLanguages[7] = "C";
    // or equivalent to
    array_push($programmingLanguages, "C");

    // you can push more than one
    // array_push($programmingLanguages, "C", "D", "E");

    // ===========================================
    // Associative Array
    // ===========================================

    $associativeArray = [
        "name" => "Karim",
        "age" => 20,
        "gpa" => 3.5,
        "isGraduated" => true,
        10 => "Ten",
        11 => "Eleven",
    ];

    // add another element
    $associativeArray["isMarried"] = false;
    $associativeArray[] = "Hello"; // 12 // append it to the end of the array (start from last index added)
    echo nl2br("\n\n\n\n\n\n\n\n\n\n");
    print_r($associativeArray);


    // keys is either integers or string

    $arrs = [
        "arr1" => [
            1 => "_one_",
            "1" => "ONE", // casted to (1) override previous
            true => "TRUE", // casted to (1) override previous
        ],
        1.5 => "One Point Five", // this key will be casted to (integer 1)
        "" => "Empty String",
        15 => "Fifteen",
    ];

    echo "<br/>";
    print_r($arrs);
    echo $arrs[""]; // Empty String
    echo $arrs[null]; // "Empty String"
    echo $arrs[(string)false]; // "Empty String"


    // Array will assign automatic keys when we don't specify any keys,
    // it will see Largest previous Index and add 1 to it

    $arrs[] = "Sixten";
    echo "<pre>";
        print_r($arrs);
    echo "</pre>";


    // ===========================================
    echo "<h5>Casting Keys of Array</h5>";
    echo $arrs['arr1'][1]; // _one_
    echo "<br/>";
    echo $arrs['arr1']["1"]; // ONE
    echo "<br/>";
    echo $arrs[1.5]; // One Point Five (this index will be casted as 1 integer)
    echo "<br/>";
    echo $arrs[1]; // One Point Five again
    echo "<br/>";
    // ===========================================

    // ===========================================
    // Pop: remove last element
    // ===========================================

    $lastElement = array_pop($arrs);
    echo "<br/>";
    array_log($arrs);

    // ===========================================
    // Shift: remove first element
    // Re-indexing
    // if some elements index from 50 for example [0=> , 1 => 50 => , 51 =>]
    // and you deleted first element, it will re-index to be [0=> , 1 => 2 => , 3 => ]
    // ===========================================
    $firstElement = array_shift($arrs);
    echo "<br/>";
    array_log($arrs);

    // ===========================================
    // Unshift: add element to the beginning
    // ===========================================
    array_unshift($arrs, "Zero");
    echo "<br/>";
    array_log($arrs);

    // ===========================================
    // unset (No Re-indexing) (will keep the order with same indexes)
    // means when you delete an element, array will not re-index to be ordered
    // unlike other functions, they will re-index
    // ===========================================

    unset($arrs[1], $arrs[16]); // destroy element at index 1
    // unset($arrs); // destroy the whole array
    echo "<br/>";

    // ===========================================
    // Push: add element to the end
    // ===========================================
    array_push($arrs, "Sixten"); // bush to the array with mass indexes (used unset)
    echo "<br/>";
    array_log($arrs);

    // ============================================
    // Splice: remove element from array but with re-indexing (unlike unset)
    $input = array("red", "green", "blue", "yellow");
    array_splice($input, 2, 1);
    array_log($input);
    // ==========================================

    // ===========================================
    // Sort: sort array
    // ===========================================

    sort($arrs);
    echo "<br/>";
    array_log($arrs);

    // ===========================================
    // Practise: TIPS & TRICKS
    // ===========================================

    $array = [1 => "One", 2 => "Two", 3 => "Three"];
    unset($array[0], $array[1], $array[2]); // now array is empty

    array_push($array, "One"); // [4 => "One"] // NOT [0 => "One"]
    array_log($array);


    // ===========================================
    // Difference between: isset() vs. array_key_exists()
    // ===========================================

    $arr = [1 => "One", 2 => "Two", 3 => null];
    echo isset($arr[0]); // false (0 is not exist)

    echo isset($arr[3]); // false - check if exist and not null

    echo array_key_exists(3, $arr); // true // check if exist only

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