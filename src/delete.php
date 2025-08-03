<?php
$conn = new mysqli("db", "student", "studentpass", "finalexam");
$id = $_GET['id'];
$conn->query("DELETE FROM research_references WHERE id=$id");
header("Location: reference.php");
?>
