<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "todolist";

$conn = mysqli_connect($servername, $username, $password, $database);
echo "Cpnnected </br>";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
