<?php

    /**
     * 1. return
     * 2. declare
     * 3. tickable
     */


    /**
     * return : return value from function and stop execution of function
     * return : stop execution of file if we used it in global scope
     * if you didn't specify return value, it will return null
     */

    function sum($num1, $num2)
    {
        return $num1 + $num2;
        echo "Hello World"; // this line will not be executed
    }



    /**
     * declare : change the behaviour of the script
     * declare(ticks=1) : execute tickable function after each line
     * declare(ticks=2) : execute tickable function after each 2 lines
     *
     * declare(strict_types=1) : strict type checking
     * declare(strict_types=0) : loose type checking
     *
     * declare(encoding='UTF-8') : change the encoding of the script
     * declare(encoding='ISO-8859-1') : change the encoding of the script
     * case: when you want see benchmarking or profiling of the script to see how efficient it is
     *
     */


    function onTick()
    {
        echo "Tick <br>";
    }

    declare(ticks=1); // every one line, execute onTick function

    // register my function to be tickable
    register_tick_function("onTick");

    echo "Hello World <br>";
    echo "Hello World <br>";



    // strict type checking

    // 4:30 - Lesson https://youtu.be/6cPc_SEfgSw?si=IoTSCibHy2AkQP7f&t=282
    declare(strict_types=1); // you must know, declare statments will be applied to the whole lines that right below it
    // if you included a file below it, it will not be applied to it as well (exception)
    // You must define this declare in that file as well