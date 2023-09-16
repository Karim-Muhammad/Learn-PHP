<?php

    /**
     * Video: https://youtu.be/et1aVZWMvVE?si=9iKVFaNVsRyha4VM
     */

    $x = 5;
    function foo() {
        global $x; // reference to original variable
        // OR
        $GLOBALS['x']; // reference to original variable
        // inside this assosiative array, we have all global variables (GET, POST, FILES, SERVER, COOKIE, SESSION, ...)
        // and we can add our own variables
        $x = 10;
        echo $x;
    }

    echo $x; // 5
    foo();
    echo $x; // 10

    // include "file.php"; // inside this file, can use $x variable and change it as well
    // because it is global variable


    // PHP offers some super globals and $GLOBALS variables, you should avoid it as possible
    // hard to debug, hard to test, hard to maintain, and introduce some bugs

    // Of Course other super globals are useful like sessions, cookies, GET, POST


    // Difference between static and regular variables
    // regular variables are destroyed when the function is done executing or file
    // static variables are not destroyed when the function is done executing or file


    echo "<br/>";
    echo "<br/>";
    function getValue() {
        $value = someVeryExpensiveOperation();
        return $value;
    }

    function getValueReal() {
        static $value = null; // once this line is executed, it will not be executed again

        if($value === null) {
            $value = someVeryExpensiveOperation();
        }

        return $value;
    }

    function someVeryExpensiveOperation() {
        // some very expensive operation
        echo "<br/> Processing <br/>";
        sleep(2);

        return 10;
    }

    echo getValueReal(); // 10
    echo getValueReal(); // 10
    echo getValueReal(); // 10

    // Static used for caching, and it is very useful in some cases