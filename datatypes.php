<?php

    $name = "Karim";
    $age = 30;

    // Var Dump - return all information of variable not only type
    var_dump($name);
    
    print('<br/>');

    echo var_dump($name), '<br/>';

    // You don't need echo
    echo var_dump($age), '<br/>';
    // var_dump internally use display function, so you don't need 'echo' function




    $cars = array("Tyota", "Kia", "Mercedes"); // [1]
    $names = ["karim", "muhammad", 'Abdo']; // [2]

    // echo "<br/>".$cars."<br/>"; Error: cannot convert array to string
    var_dump($cars);


    // Get Type
    print gettype($cars); // return only datatype
