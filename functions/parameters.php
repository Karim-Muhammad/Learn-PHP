<?php

    declare(strict_types=1);

    /**
     * -------------- Parameters ----------
     * Video: https://youtu.be/I9XkWyets9w?si=jh6gw2gdhNnjpGQ8
     * ------------- RESOURCES --------------
     * Coercive typing with union types - https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union.coercive
     * Named arguments - https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments
     * RFC - https://wiki.php.net/rfc/named_params
     */


    // Parameters: variables you list as part of the function definition
    function multi($num1, $num2) {
        return $num1 * $num2;
    }

    // Arguments: actual values you pass to the function
    echo multi(5, 10); // 50


    function multi_strict(int|array $num1, int $num2) {
        return $num1 * $num2;
    }

    // echo multi_strict(5, 10); // 50
    // echo multi_strict(5.5, 10); // error
    // echo multi_strict('5', 10); // error

    /**
     * Advice: use strict mode when you use type hinting, because may type coercion tricky
     */


    /**
     * Default Values of Parameters should be at the end of parameters
     * Values is : String, Integer, Float, Boolean, Array, No Object, No Function
     */

    /**
     * Pass by Reference & Pass by Value
     */

    function pass(&$v) {
        $v++;
    }
    $x = 1;
    pass($x);
    echo $x; // 2

    /**
     * Splat Operator & Periodic Function
     * Periodic Functions: Functions that can take any number of arguments
     * splat/Spread/unpack/elipses Operator: ...
     */

    function sum_all(int|float...$numbers) { // means this array of numbers should be int or float
        // $sum = 0;
        //foreach($numbers as $number) {
        //    $sum += $number;
        // }

        // return $sum;

        // 2#
        return array_sum($numbers);
    }

    echo sum_all(1, 2, 3, 4, 5); // 15

    // We can do the same with arguments keyword within array
    function sum_all_() {
        $sum = 0;
        foreach(func_get_args() as $number) {
            $sum += $number;
        }

        return $sum;
    }
    sum_all_(1,2,3,4,5); // 15

    $array = [1,2,3,4,5];
    // unpack
    sum_all_(...$array); // 15 instead of passing array, we unpack this array to be arguments



    /**
     * Named Arguments
     */

    // Named Arguments is a new feature in PHP 8
    // And it helped us to pass arguments based on their names, not their positions(order)

    function named_arguments($name, $age) {
        echo "My name is $name, and my age is $age";
    }

    named_arguments(age: 30, name: "Karim"); // My name is Karim, and my age is 30


    // if you have an assosiative array, keys will be the names of arguments and values will be the values of arguments

    $array = [
        'name' => 'Karim',
        'age' => 30
    ];

    named_arguments(...$array); // My name is Karim, and my age is 30




    // Trick
    // https://youtu.be/I9XkWyets9w?si=cbJaM5o_azlu2oCM&t=706
    $arr = [3, 'x'=>4];
    function duplicate($x, $y) {
        return $x * $y;
    }

    duplicate(...$arr); // Error: overwrites x again!