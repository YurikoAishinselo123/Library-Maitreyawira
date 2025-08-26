<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "perpustakaan";

$db = mysqli_connect($server, $user, $password, $dbname);

if (!$db) {
    die("Connection error: " . mysqli_connect_error());
} else {
    // echo "✅ Connected successfully to database: " . $dbname;
}
?>