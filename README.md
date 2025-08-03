🌐 Project Overview
โปรเจกต์นี้เป็นการสร้างระบบ Web และ Database ที่ทำงานผ่าน Docker/Docker Compose บน AWS EC2 โดยมีการเชื่อมต่อผ่าน Cloudflare และกำหนด Domain เป็น https://FinalExam.Your_domain

🧱 Architecture
Internet
   |
Cloudflare (DNS + SSL)
   |
AWS EC2 (Elastic IP)
   |
Docker Compose
   ├── Web Service (Nginx + Flask/Django)
   └── DB Service (PostgreSQL/MySQL)
📄 Pages Description
URL	Description
/	Landing Page: แสดงชื่อ, รหัสนักศึกษา, เมนูหลัก และลิงก์ GitHub
/about	แสดงข้อมูลส่วนตัวและรูปภาพของนักศึกษา
/myresearch	แสดงแนวทางการวิจัย พร้อมรายการอ้างอิงแบบ IEEE และลิงก์เปิดไฟล์ PDF จาก DB
/reference (optional)	หน้าสำหรับ Add/Edit/Delete รายการอ้างอิง (สามารถรวมกับ /myresearch ได้)
⚙️ Deployment Steps
1 สร้าง EC2 Instance บน AWS
-ติดตั้ง Docker และ Docker Compose
-กำหนด Security Group ให้เปิด Port 80, 443, และ 22

2 สร้าง Docker Compose
-Web: ใช้ Flask/Django + Nginx
-DB: ใช้ PostgreSQL/MySQL
-Mount Volume สำหรับเก็บไฟล์ PDF

3 เชื่อมต่อ Domain ผ่าน Cloudflare
-เพิ่ม A Record ชี้ไปยัง Elastic IP ของ EC2
-ตั้งค่า SSL/TLS และ Redirect HTTP → HTTPS
 
4 สร้างระบบจัดการอ้างอิง
-หน้า /myresearch ดึงข้อมูลจาก DB
-สามารถเพิ่ม/แก้ไข/ลบรายการอ้างอิง
-แสดงลิงก์เปิดไฟล์ PDF จาก URL หรือ Local Storage

