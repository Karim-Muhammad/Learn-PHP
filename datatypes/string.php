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


    $x = "Will";
    $y = "Smith";

    // Single Quotes

    echo 'My name is $x $y'; // My name is $x $y (cannot use variables)

    // Double Quotes

    echo "My name is $x $y"; // My name is Will Smith (can use variables)
    echo "My name is ${x} {$y}"; // My name is Will Smith (can use variables)


    // Heredoc
    // Heredoc is a way to declare a string, can use variables, can use double quotes, can use single quotes

    echo <<<EOT
    My "name" 'is' $x $y
    EOT;

    // Nowdoc
    // Nowdoc is a way to declare a string, Cannot use variables, use double quotes, can use single quotes

    echo <<<'EOT'
    My "name" 'is' $x $y
    EOT;


    echo "Karim"[0]; // K
    echo "Karim"{0}; // K (same as above but not recommended) Deprecated in PHP 7.4



    $text = <<< TEXT
    LINE 1
    LINE 2
    LINE 3
    TEXT;

    echo $text;

    /**
     * in Console:
     * LINE 1
     * LINE 2
     * LINE 3
    */

    // in HTML: LINE 1 LINE 2 LINE 3

    // Because new line in HTML is `<br />` not `\n`
    // So we need to use nl2br() function

    echo nl2br($text);
    // in Console: LINE 1 <br/>LINE 2 <br/>LINE 3 <br/>
    /**
     * in HTML:
     *  LINE 1
     *  LINE 2
     *  LINE 3
     */



     // spaces
     echo <<< DIV
        <div>
            <p>Who</p>
            <p>Are</p>
            <p>You?</p>
        </div>
     DIV;

     // these spaces will be rendered in HTML, but browser will ignore them
    //  if we need to count them, spaces will be counted    
