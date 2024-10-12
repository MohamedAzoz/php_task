<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "task";
try {
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
} catch (Exception $er) {
    echo $er;
}
?>