<?php


    function od($x, $y) {
        echo $x . $y;
    }

    od($x = 1, $y = 2); // 12
    od($y = 1, $x = 2); // 12

    echo "<br/>";

//        declare(strict_types = 1);
    function add(int $n1, int $n2): void {
        return $n1 + $n2;
    }

    echo add(1, 2); // 3
    echo add("String", "String2"); // Error