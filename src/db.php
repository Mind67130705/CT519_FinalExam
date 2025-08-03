<?php
$host = 'db';
$db = 'finalexam';
$user = 'student';
$pass = 'studentpass';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

