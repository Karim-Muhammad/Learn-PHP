<?php

    // Constants

    // =============== Define ===============
    define("NAME", "KARIM"); // Created in Runtime
    const NAME2 = "KARIM2"; // Created in Compile Time (Faster)

    // You can define constants with `define` within Control Structure
    // like if...else, loop, ...

    // while define constants with `const` keyword, cannot be within Control Structure

    $status = "PAID";
    define("STATUS_".$status, "DONE");

    echo STATUS_PAID; // although it suggeles with yellow line(warning)
    // but it is working, we just define it dynamically

    // ================== const ===============
    const _NAME_ = "KARIM2"; // Created in Compile Time (Faster)

    // ============= Variables vs. Constants ===============
    $NAME = "Muhammad";
    echo NAME;
    echo $NAME;


    // Function to check if defined or not
    echo defined("NAME"); // True



    // Magic Constants
    // constants but change debend on when/where used __

    echo __DIR__;
    echo "<br />";

    echo __FILE__;
    echo "<br />";

    // Predefined Constants
    echo PHP_VERSION;
    echo "<br />";




    // When use Define() and const keyword?
    // Control Structure?



