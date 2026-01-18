<?php

// 1 ชื่อต่อกับฐานข้อมูล
require('dbconnect.php');

$sql = "SELECT * FROM employees"; // 2 คำสั่ง sql ในการทำงานก็จะทำงานดึงข้อมูลมาทั้งหมดเลย

//  3 คำสั่งรัน sql
$result = mysqli_query($con,$sql); 

// 4 คำสั่งในการดึงข้อมูลรูปแบบ array
$row = mysqli_fetch_array($result,MYSQLI_BOTH);

echo "รหัสพนักงาน = ".$row["emp_id"]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "สกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["emp_gender"]."<br>";
echo "ทักษะ = ".$row["emp_skills"]."<br>";
echo "<hr>";

// test


?>