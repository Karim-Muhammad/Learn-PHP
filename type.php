<?php

    echo true + true;
    echo "<br/>";

    echo gettype(true + true);
    echo "<br/>";

    echo 5 + "5";
    echo "<br/>";

    echo gettype(5 + "5");
    echo "<br/>";

    echo 5 + "5 Lessons"; // (10) => Warning
    echo "<br/>";
    echo gettype(5 + "5 Lessons"); // Integer => Warning
    echo "<br/>";

    // in Javascript there is Integer.parse() to parse this string and extract number

    echo 6 + "Lessons 6"; // Error
    echo "<br/>";

    echo gettype(6 + "Lessons 6");
    echo "<br/>";


    