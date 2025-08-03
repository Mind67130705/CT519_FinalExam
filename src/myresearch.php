<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Research</title>
</head>
<body>
    <h2>แนวทางการวิจัย</h2>

    <h3>รายการอ้างอิง (IEEE)</h3>
    <ul>
    <?php
    $result = $conn->query("SELECT * FROM research_references");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['title']} - <a href='{$row['pdf_url']}' target='_blank'>PDF</a></li>";
        }
    } else {
        echo "<li>ไม่สามารถดึงข้อมูลได้: " . $conn->error . "</li>";
    }
    ?>
    </ul>

    <!-- ปุ่มย้อนกลับไปหน้าหลัก -->
    <div class="back-button">
        <a href="index.php">
            <button>ย้อนกลับไปหน้าหลัก</button>
        </a>
    </div>
</body>
</html>

