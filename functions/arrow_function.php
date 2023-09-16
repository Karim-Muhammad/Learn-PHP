<?php

    /**
     * Article: https://medium.com/@sirajul.anik/php-3-dots-in-method-syntax-understanding-the-first-class-callable-syntax-625c65fdbeca
     */

    $y = 1;

    $fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
    $fn2 = function ($x) use ($y) {
        return $x + $y;
    };

    var_export($fn1(3));
    echo "<br/>";

    // ERROR
//    $foo = fn() =>{
//        $message = "Hello world!";
//        echo $message;
//    };

    // Correct
    $foo = fn() => "Hello world!";