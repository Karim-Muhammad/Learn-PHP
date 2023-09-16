<?php

    /**
     * Article: https://medium.com/@sirajul.anik/php-3-dots-in-method-syntax-understanding-the-first-class-callable-syntax-625c65fdbeca
     */

    // Variable Variable
    $variableName = '_variable';
    $$variableName = 'variable-value1';

    echo $_variable;
    echo "<br />";

    // Variable Function
    function greeting() {
        echo "Hello World";
    }

    $functionName = 'greeting';
    $functionName(); // greeting();

    echo "<br />";


    $func = "echo"; // cannot
//    $func("Hello World"); // echo "Hello World";
    /**
     * Variable Function doesn't work with the language constructs such as echo, print, unset, isset, empty, include, require and the like.
     * you need to use wrapper function around them and call them instead
     * we can call method of object using variable function as well but we will talk about later in OOP
     */


    $sub = function ($a, $b) {
        return $a - $b;
    };

    $x = "sum";
    $x(); // Error not a function
    if(is_callable($x)) {
        $x();
    }else {
        echo "Not callable";
    }

    // Anonymous Functions aka Lambda Function
    $meow = function () {
        echo "Meow";
    };

    // you can pass anonymous function as argument to another function
    // you can return anonymous function from another function as well
    // you can assign anonymous function to variable as well

    // you can use global variables (parent variables) within anonymous function with using `use` keyword
    $y = 1;

    // addition called Closure
    $fn = function ($x) use ($y) {
        return $x + $y;
    };

    // $y here is a copy of $y variable not reference to it
    $fn2 = function ($x) use (&$y) {
        return $x + $y;
    };

    // now $y is reference to $y variable


    /**
     * Video: https://youtu.be/7_FOIxYLF-s?si=-7LrVqnYxNaJoabv&t=310
     * Callable type & Callback Functions
     */

    // when we pass a function as argument to another function, we call it callback function

    function testCall(callable $fn) {
        $fn();
    }

    // 'Anonymous Function' is a instance of 'Closure' class

    // you can type hint closure instead of callable
    /*
     * 'closure' must be anonymous function
     * 'callable' can be any function
     */

    // we will know more about closure in OOP

    // variable function $x()
    // regular function 'x'()


    // Difference between Anonymous Function and Arrow Function
    // Arrow Function not need `use()` to access parent variables
    // Arrow Function not need `return` keyword if it has one line of code
    // You cannot have multiple line expressions in arrow function

    // Maybe next version we can add more lines of code in arrow function, but not now
