<!DOCTYPE html>
<html>
<head>
    <title>Manage References</title>
</head>
<body>
<h2>Manage References</h2>
<a href="form.php">Add Reference</a>

<?php
$conn = new mysqli("db", "student", "studentpass", "finalexam");

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ใช้ชื่อ table ที่ไม่เป็นคำสงวน และชื่อคอลัมน์ให้ตรงกับที่สร้างไว้
$sql = "SELECT * FROM research_references";
$result = $conn->query($sql);

// ตรวจสอบว่า query สำเร็จหรือไม่
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<table border="1">
<tr><th>Title</th><th>PDF</th><th>Actions</th></tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= htmlspecialchars($row['title']) ?></td>
    <td><a href="<?= htmlspecialchars($row['pdf_url']) ?>" target="_blank">PDF</a></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>

