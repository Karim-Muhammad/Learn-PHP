<?php

    /**
     * Video: https://youtu.be/ytVPiYILz80?si=fNiF83Fl7ECJ6pmH
     * Video: https://youtu.be/ytVPiYILz80?si=KWwAHkNFkmLHlkLJ
     */

    // default apache config file is users/local/apache2/conf
    // for xampp this file is in xampp/apache/conf

    // server logs stored in xampp/apache/logs

    // you can run mutliple websites in one apache server (called virtual hosts)
    // 1. different ip for each website
    // 2. different port for each website
    // 3. different domain for each website (same ip)

    // C:\xampp\apache\conf\extra in vhosts.conf i create virtual host with domain name
    // learn-php-gio.example.com
    // i want to access this website from my browser, so i need to add this domain name
    // to my hosts file
    // C:\Windows\System32\drivers\etc\hosts


    // htacess file will be read in every request and responsible for configuration current directory only
    // and changes in this file will reflect immediately without restarting apache server

    // don't use htaccess file unless you really need it, because it may impact performance

    // alternative to htaccess file is to use apache config file
    // and use <Directory> tag to specify the directory you want to configure
    // and changes in this file will not reflect immediately, you need to restart apache server


//    <IfModule>
//        RewriteEngine On
//
//        // if request is not a file and not a directory (means it's a route)
//        // means as well, if user request file, or directory, don't process this request
//        RewriteCond %{REQUEST_FILENAME} !-f
//        RewriteCond %{REQUEST_FILENAME} !-d
//
//        // redirect all requests to index.php
//        RewriteRule ^(.*)$ index.php [L]
//        RewriteRule (about) about.php [L]
//    </IfModule>

    echo "Welcome to Index Page";