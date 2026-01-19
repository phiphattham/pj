<?php
// 1 ชื่อต่อกับฐานข้อมูล
require('dbconnect.php');

$sql = "SELECT * FROM employees"; // 2 คำสั่ง sql ในการทำงานก็จะทำงานดึงข้อมูลมาทั้งหมดเลย

//  3 คำสั่งรัน sql
$result = mysqli_query($con,$sql); 

// 4 คำสั่งในการดึงข้อมูลรูปแบบ object
$row = mysqli_fetch_object($result);

// ทำการแสดงผล
// เครื่องก็จะทำการเปลี่ยนจากเดิมที่เป็นในรูปแบบ [] ก็มาเป็น ->
echo "รหัสพนักงาน = ".$row->emp_id."<br>";
echo "ชื่อ = ".$row->emp_fname."<br>";
echo "สกุล = ".$row->emp_lname."<br>";
echo "เพศ = ".$row->emp_gender."<br>";
echo "ทักษะ = ".$row->emp_skills."<br>";
echo "<hr>";



?>