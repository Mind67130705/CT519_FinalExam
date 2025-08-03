<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Research</title>
</head>
<body>
    <h2>แนวทางการวิจัย</h2>

    <h3>รายการอ้างอิง (IEEE)</h3>
    <ul>
    <?php
    $result = $conn->query("SELECT * FROM references");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['title']} - <a href='{$row['pdf_url']}' target='_blank'>PDF</a></li>";
        }
    } else {
        echo "<li>ไม่สามารถดึงข้อมูลได้: " . $conn->error . "</li>";
    }
    ?>
    </ul>
</body>
</html>

