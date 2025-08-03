<?php
$conn = new mysqli("db", "student", "studentpass", "finalexam");
$id = $_GET['id'];
$title = $_POST['title']; $link = $_POST['pdf_link'];
$conn->query("UPDATE research_references SET title='$title', pdf_link='$link' WHERE id=$id");
header("Location: reference.php");
?>
