<?php

    echo ini_get("memory_limit");
    echo "<br/>";

    $string = 'X';
    for($i = 0; $i < 1000; $i++) {
        $string .= $string; // 2 + 4 + 8 + 32 + 64 + (1000 times)
    }

    echo strlen($string);

    // to delete the limit, we can set it with -1, but not recommended you should optimize your code

