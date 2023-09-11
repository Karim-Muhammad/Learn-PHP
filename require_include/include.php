<?php
    // We will talk about Code organization and structure later when we get to autoloading and namespaces
    // but for now we will learn how to include files in PHP
    // include, include_once, require, require_once

    /**
     * include result in warning if file not found
     * require result in fatal error if file not found, and stop execution of the script
     */

    include "require.php";
    // require 'require.php';

    echo "Continue Execution"; // with include with not found file will be executed, with require will not be executed


    /**
     * From That Difference:
     * include we use it when our code is not critical(not depend on), and we can continue execution of the script
     * require we use it when our code is critical(depend on), and we can't continue execution of the script
     */

    // if you didn't specify file path, the files are looked up set in `php.ini` file under `include_path` directive


    /**
     * include_once, require_once
     * if you included the file before, it will not be included again
     * it will not result in error if you included the file before
     */

    require 'test.php';
    require  'test.php'; // will execute OK
    require_once 'test.php'; // will not be included again, since it included before already

    // included file will inherit the scope of the file that included it
    // successful include result in 1(true), otherwise result in 0(false), otherwise the file return value