<?php

    $name = "Karim Muhammad";

    echo strlen($name);
    echo "<br />";
    echo str_repeat($name, 3);
    echo "<br />";
    
    
    echo strrev($name);
    echo "<br />";
    echo str_contains("Karim", "im"); // 1 (true)
    echo str_contains("Karim", "ai"); // false
    echo "<br />";

    echo str_pad("Karim", 10, "=");
    echo "<br />";

    var_dump(str_split($name, 5));
    echo "<br />";

    echo str_word_count($name." Abd-ElTawab Hassan"); // 4
    echo "<br />";

    echo strpos($name, "im"); // Kar[im]
    echo "<br />";