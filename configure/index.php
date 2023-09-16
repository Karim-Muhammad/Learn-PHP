<?php

    // error_reporting, error_log, display_errors
    ini_get("error_reporting");

    $array = [1];
    echo $array[1]; // Notice: Undefined offset: 1 in C:\xampp\htdocs\php\error_handling\error_reporting.php

    // when we set error_reporting to E_ALL & ~E_WARNING, it will not display any error
    ini_set("error_reporting", E_ALL & ~E_WARNING); // execute in runtime
    echo $array[1]; // no warning will be shown


    // Display Errors
    // display_errors = On
    ini_set("display_errors", 0);
    echo $array[1]; // no warning will be shown

    // we often use 0 in production mode, and 1 in development mode, but errors will be logged in log file
    echo "working";

    // error_log




    // post_max_size, determine the maximum size of post data that can be sent
    ini_get("post_max_size"); // 8M

    // max_execution_time, determine the maximum number of seconds that a script can be executed
    // file: max_time.php

    // memory_limit, determine the maximum amount of memory that a script can consume
    // file: max_memory.php

    // File Uploads
    ini_set("file_uploads", 0); // 0 means off, 1 means on
    // File Tmp
    ini_set("upload_tmp_dir", "C:\xampp\tmp"); // default value
    // Upload Max Filesize
    ini_set("upload_max_filesize", "2M"); // default value

    // timezone
    echo ini_get('date.timezone');
    ini_set("date.timezone", "Africa/Cairo");

    echo "<br/>";
    echo date_default_timezone_get();
    echo "<br/>";
    echo date('d-m-y h:i:s', time());
    echo "<br/>";

    // include_path
    echo ini_get("include_path");
    echo "<br/>";
    ini_set("include_path", "C:\xampp\htdocs\php\configure");
    // when we include file or require file, php will search for it in include_path