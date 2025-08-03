<!DOCTYPE html>
<html>
<head><title>Manage References</title></head>
<body>
<h2>Manage References</h2>
<a href="form.php">Add Reference</a>
<?php
$conn = new mysqli("db", "student", "studentpass", "finalexam");
$result = $conn->query("SELECT * FROM references");
?>
<table border="1">
<tr><th>Title</th><th>PDF</th><th>Actions</th></tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['title'] ?></td>
<td><a href="<?= $row['pdf_link'] ?>">PDF</a></td>
<td>
  <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
  <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
