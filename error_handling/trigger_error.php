<?php

    /**
     * Need To Study again
     */

    /**
     * Video: https://youtu.be/rQntgj7yink?si=XkEhV4eMCDB5pPiH
     *
     * RESOURCES
     * https://www.php.net/manual/en/function.set-error-handler.php
     * https://www.php.net/manual/en/errorfunc.constants.php
     */

    // Error Handling
    // Error: is a problem that occurs during the execution of a program
    // Error: is a build in class in PHP
    // Exception: is a problem that occurs during the execution of a program
    // Exception: is a build in class in PHP
    // Exception: is a class that extends Error class
    // Exception: is a class that extends Throwable class
    // Throwable: is a class that extends Error class

    // trigger_error("This is an error", E_USER_ERROR); // must be user-defined error
    // display_errors(); // you often tuned off in production, to hide these errors in website
    // but still will be logged in log file

    // error_log("This is an error"); // will be logged in log file


    // To Handle Errors, we have two ways
    // 1. set_error_handler
    // 2. try/catch

    // 1. set_error_handler
    function errorHandler(int $typeError, string $message, ?string $file, ?int $line) {
        echo "Error Handler <br/>";
        echo "Type: $typeError <br/>";
        echo "Message: $message <br/>";
        echo "File: $file <br/>";
        echo "Line: $line <br/>";
    }

    error_reporting(E_ALL & ~E_WARNING); // execute in runtime
    set_error_handler("errorHandler", E_ALL); // E_ALL means all types of errors
    // this custom error handler will override what we set in error_reporting()
    // in this case we will see any warning error, although error_reporting() is set to not show warning errors

    //
    echo $w; // warning undefined

    //
    $a = [1];
    echo $a[3];

