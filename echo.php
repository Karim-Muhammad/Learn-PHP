<?php
    echo "Hello World<br/>";
    echo("Karim");

    echo "<h2>Hey Brother</h2>";
    echo "Hello", " Karim", " Where you from (Multiple Parameters)". "<br/>";
    // echo("Hello", " Karim", " Where you from (Multiple Parameters"); // Error


    echo print "----- Hello world -----"; // Print return 1, so that can be used in expression
    // 1- print will display hello world
    // 2- what returned from print, will be printed by 'echo'

    // print echo("----- Error -----"); // Error

    $name = "Karim";
    // Mutli Arguments
    echo "My name is ", $name, '<br/>'; // comma (,)
    // One Argument (concated)
    echo "My name is ". $name. ", WBU?"; // dot (.)
    // two Arguments with (concatenation .)
    echo "My name is ". $name, ", WBU?"; // dot (.)

    // `echo`  you can use it with many arguments
    // `print` you can just use it with one argument



    // print "Print Statment ". $name, '<br/>' // Comma(,) Error
    print "Print Statment ". $name. '<br/>' // Dot (.)


    // Recommended: use 'echo', unless your code need 'print()'
?>