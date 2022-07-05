<?php
$servername = "localhost";
$username = "moneymon_277407_mytutor";
$password = "Kbf*1XypoC8D";
$dbname = "moneymon_277407_mytutordb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>