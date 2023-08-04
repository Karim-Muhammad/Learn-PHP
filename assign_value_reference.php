<?php

    $x = 1;
    $y = 2; // copy value


    $x = 3;
    echo $y; // 2

    // =====================
    // Reference &

    $x2 = 10;
    $y2 = &$x2; // copy reference

    $x2 = 300;
    echo $y2; // 300