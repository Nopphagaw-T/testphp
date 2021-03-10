<?php
    define("username", "test");
    define("pass", "");
    define("host", "localhost");
    define("db", "test");
    $mysql = new mysqli(host, username, pass, db );
    // Check connection
    if ($mysql -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    else{
        echo "DB connected";
    }
?>