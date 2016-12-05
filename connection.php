<?php

    /*$link = mysqli_connect("localhost", "root", "", "mydb");
    

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

    mysqli_close($link);*/


    // USING OBJECT ORIENTED STYLE //


    $host = "localhost";
    $username = "root";
    $password = "root";
    $db = "my_db";

    $mysqli = new mysqli($host, $username, $password, $db);

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ')' . mysqli_connect_error());
    }

   // echo "Success... " . $mysqli->host_info . "\n";

    //$mysqli->close();


?>