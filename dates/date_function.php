<?php

    /**
     * Video: https://youtu.be/Zf9MWSUKpVM?si=M57KOvpPh4QvDC42
     */

    echo time(); // return timestamp in milliseconds since 1/1/1970
    echo "<br/>";

    $current_time = time();
    $after_five_days = $current_time + (5 * 24 * 60 * 60); // 5 days in seconds
    $yesterday = $current_time - (24 * 60 * 60); // 1 day in seconds

//    $formatted_date = date('Y-m-d H:i:s', $current_time);
    $formatted_date = date('d-M-Y H:i:s', $current_time);
    echo $formatted_date;
    echo "<br/>";

    $formatted_date = date('d M, Y', $after_five_days);
    echo $formatted_date;
    echo "<br/>";

    // you can customize all forms, but keep reserved characters
    $formatted_date = date('d/m/y g:i', $yesterday); // without am, pm
    $formatted_date = date('d/m/y g:ia', $yesterday); // pm, am
    echo $formatted_date;
    echo "<br/>";


    // by default date, time functions uses timezone that you set in php.ini file
    // but you can override it in runtime with built in function

    // list of timezones: https://www.php.net/manual/en/timezones.php

    // set timezone
    date_default_timezone_set('Africa/Cairo');
    echo date_default_timezone_get();
    echo "<br/>";

    $formatted_date = date('d/m/y g:ia', $current_time); // pm, am
    echo $formatted_date;
    echo "<br/>";
    echo "<br/>";

    // mktime: return timestamp from date
    $timestamp = mktime(0, 0, 0, 1, 1, 2020); // hour, minute, second, month, day, year
    echo $timestamp;
    echo "<br/>";

    // another function to get timestamp from date
    // strtotime: return timestamp from date
    $timestamp = strtotime('1/1/2020');
    echo $timestamp;
    echo "<br/>";

    // strtotime: has a cool argument, you can pass it string like 'tomorrow', 'yesterday', 'next week', 'next month', 'next year', 'last week', 'last month', 'last year'
    $timestamp = strtotime('tomorrow');
    $timestamp = strtotime('yesterday');
    $timestamp = strtotime('first day in february');
    $timestamp = strtotime('next monday'); // today monday with date 11/9 -> next monday 18/9
    echo date("d/m/y", $timestamp);
    $date = date("d/m/y", $timestamp);

    // parse date
    echo "<pre>";
        // print_r(date_parse($date));
        // print_r(date_parse_from_format("Y-m-d - h", $date));
        print_r(date_parse_from_format("Y - h", $date));
    echo "</pre>";