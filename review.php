<?php
include('database.php');
$username = $_SESSION['username'];
$works = [];
$username = mysqli_real_escape_string($conn, stripslashes($username));
$conclude = "SELECT * FROM work where username = '$username'";
$result = mysqli_query($conn, $conclude);
$rows = mysqli_num_rows($result);
if ($rows >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        $description = $row['description'];
        array_push($works, $description);
    }
    print_r($works);
}
