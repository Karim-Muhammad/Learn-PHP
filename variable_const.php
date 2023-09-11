<?php

/**
 * RESOURCES
 * Predefined Constants - https://www.php.net/manual/en/reserve...
 * Magic Constants - https://www.php.net/manual/en/languag...
 */

    define("FOO", "Bar"); // can be replaced with const, since it is in top-level scope

    if(true) {
//        const c = 10;
        define('BAR', "Far");
    }

    echo BAR; // accessible!

//================================================================================

    $id = "ID";

    echo Student_ID; // used before declartion [ERROR]
    define("Student_".$id, "karim19893"); // since it is run in runtime, we can identify name of constant dynamically

    //    in case const we cannot, because it is run in compile-time

//====================================================================================

