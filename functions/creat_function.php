<?php

    function sum($number1, $number2) {
        return $number1 + $number2;
    }

    /**
     * We can call function before/after it's declaration in PHP like JavaScript
     * Function with no return statement will return null | with return nothing will return null as well
     */


    cond(); // False, because function declaration within if statement
    if(true) {
        function cond() {
            echo "Exception";
        }
    }

    // bar(); // Error
    foo(); // Foo
    bar(); // Bar (now you can call bar function)

    function foo() {
        echo "Foo <br/>";
        function bar() {
            echo "Bar <br/>";
        }
    }


    /**
     * Not Recommended make inner Function or define function within If statments
     */

    // Return
    // Without Strict Mode
    function a(): int {
        return 1; // OK
        return '1'; // OK
        return []; // Error
    }

    // With Strict Mode
    function b(): int {
        return 1; // OK
        return '1'; // Error
        return []; // Error
    }


    // Interview Question
    function voi(): void {
        // no return is OK
        return; // OK
        // return 1; // Error
        // return null; // Error !!s
    }

    /**
     * Video : https://youtu.be/ba1rulfNhLk?si=WB0Y9xStyzlPFFVx&t=373
     * @return int
     */
    function number1(): int {
        return 1;
        // return null; // Error
    }

    // ?int means return int or null (nullable)
    function number2(): ?int {
        return 1;
         return null; // OK
    }

    // return multiple datatypes using pipe |
    function summation($n1, $n2): int|float|array {
        return $n1 + $n2;
    }

    /**
     * Video : https://youtu.be/ba1rulfNhLk?si=83t3RKzN1Y8fcL_d&t=445
     * Mixed
     */
    function summation2($n1, $n2): mixed {
        // but not recommended, it like no return type
        return $n1 + $n2;
    }

    /**
     * There are some cases we may use mixed like:
     * 1. We don't know what type of data will return
     * 2. There is no type hinting for return type
     */