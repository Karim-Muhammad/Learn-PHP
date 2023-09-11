<?php

    $x = null;
    $y;
    echo $k; // Notice: Undefined variable: k NULL
    echo $y; // Notice: Undefined variable: y NULL

    echo is_null($y); // 1 (true)
    echo is_null($k); // 1 (true)

    unset($x);

    echo $x; // Notice: Undefined variable: x NULL (underlying) because before we unset it


    // ===========================================
    // TIP
    // ===========================================

    echo (string)null; // empty string
    echo (int)null; // 0
    echo (bool)null; // false
    echo (float)null; // 0
    echo (array)null; // Array (empty) []
    echo (object)null; // Object (empty) stdClass Object ([])

    echo ++null; // 1
    echo null++; // what result?
