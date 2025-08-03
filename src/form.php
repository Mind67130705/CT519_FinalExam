<?php if (isset($_GET['id'])) {
  $conn = new mysqli("db", "student", "studentpass", "finalexam");
  $id = $_GET['id'];
  $res = $conn->query("SELECT * FROM references WHERE id=$id");
  $data = $res->fetch_assoc();
  $title = $data['title']; $link = $data['pdf_link'];
  $action = "edit.php?id=$id";
} else {
  $title = $link = ""; $action = "insert.php";
}
?>
<form method="post" action="<?= $action ?>">
Title: <input type="text" name="title" value="<?= $title ?>"><br>
PDF Link: <input type="text" name="pdf_link" value="<?= $link ?>"><br>
<input type="submit" value="Submit">
</form>

