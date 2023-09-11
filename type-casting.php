<?php

/**
 * RESOURCES
 * Type Juggling - https://www.php.net/manual/en/languag...
 * Type Comparison - https://www.php.net/manual/en/types.c...
 */

// to Enable Strict Mode
//declare(strict_types=1);

/**
 * ======================= Data Types - Typecasting =====================
 */

// PHP weakly typed & Loosly Typed & Dynamically Typed
// You don't need to determine datatype for variable
// and also datatype can chaned after declartion as well

// Dynamically Typed means Type Checking happens in Runtime not in CompileTime


# 4 Scalar Types
    # bool => True, False
    $completed = true;
    # int => 1, 2, 0, -5 (No Floating point)
    $score = 90;
    # float => 1.5, 3.333333, 0.5 (Decimal)
    $price = 9.99;
    # string => "Karim", "Hello World"
    $name = "Karim";

    echo $name."<br/>";
    echo "he got $score"."<br/>";

    var_dump($price);
    echo "<br/>";

    echo gettype($name)."<br/>";
    echo "<br/>";

    print_r($name);
    echo "<br/>";
//    TIP: The Errors Reports that display in Page, we can set some configuration in PHP, to how different Errors


# 4 compound types
    # Array => [1, "karim", true, 5, 0.77]
    $group = [1, "KARIM", true, 0.44];

    echo $group; // Error -> cannot convert Array To String
    echo "<br/>";


    print_r($group); // OK
    echo "<br/>";

    # Object -> later
    # Callable -> later
    # Iterable -> later

# Special Types
    # Resource -> later
    # Null => means no value in it

# Pesudo Types (For Readability) - later
    # mixed
    # void


//  ========================= Type Hinting ===========================
// write in functions & class

function sum($a, $b) {
    return $a + $b;
}

echo sum(1, 2)."<br/>";
echo sum(5, '9')."<br/>";
echo sum(5, '9asd')."<br/>"; // Warning

echo "<br/> =============================== <br/>";

function sub(int $a, int $b) {
    //  See That!
    $a = 5.55; // $a became Float number now, no longer INT :(
    // it is acceptable in PHP
    return $a - $b;
}

// Type hinting no means PHP won't convert if needed, we can pass string contains number, and PHP wil convert it to number first
// if OK, RUN, if cannot parse it to Number, Will Throw and Error, or Warnning


echo sub(1, 5)."<br/>";
echo sub(5, '-9')."<br/>";
//echo sub(5, '-9a')."<br/>"; // Error
// echo sub(5.89, '-9')."<br/>"; // RUN OK (before strict mode), will convert 5.89 PHP will convert it to INT as well
// Error After Enabling Strict Mode


// ================================ Strict Mode =============================

// We can enable Strict Mode, where we will throw an Error in case we passed Another Type than we defined, even if this type will converted correctly yo type which we defined like
// int $a    ------- ("1") -> before strict mode will work, after it won't work!
// I put statement in most top-level

function strick(int $a) {
    var_dump($a);
}

//strick(7.77); // ERROR

function strick2(float $a) {
    var_dump($a);
}

strick2(5); // OK (because integer is part of Float numbers)

function strick3(float $a) {
    var_dump($a);
}

//strick3("3.2"); // Error


// ================================ Type Casting ======================
echo "<br/> ================ Type Casting ===================== <br/>";
echo 1 + "1";

// 1 + "1" (Numeric Context) convert to number
// echo 2 (String Context) convert int(2) to String
