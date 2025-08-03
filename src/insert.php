<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $pdf_url = $_POST['pdf_link'];

    // แก้ชื่อ table ให้ตรงกับที่สร้างใน MySQL
    $stmt = $conn->prepare("INSERT INTO research_references (title, pdf_url) VALUES (?, ?)");
    if (!$stmt) {
        die("❌ เตรียม statement ไม่สำเร็จ: " . $conn->error);
    }

    $stmt->bind_param("ss", $title, $pdf_url);

    if ($stmt->execute()) {
        echo "✅ เพิ่มรายการอ้างอิงสำเร็จ <a href='myresearch.php'>กลับไปหน้า My Research</a>";
    } else {
        echo "❌ เกิดข้อผิดพลาด: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "❗ ไม่สามารถเข้าถึงหน้านี้โดยตรง";
}
?>

