<?php

// 1 ชื่อต่อกับฐานข้อมูล
require('dbconnect.php');

$sql = "SELECT * FROM employees"; // 2 คำสั่ง sql ในการทำงานก็จะทำงานดึงข้อมูลมาทั้งหมดเลย

//  3 คำสั่งรัน sql
$result = mysqli_query($con,$sql); 

// 4 คำสั่งในการดึงข้อมูลรูปแบบ array
$row = mysqli_fetch_assoc($result);

// print_r($row);
// 5 จะเป็นรูปแบบ array เหมือนกันแค่เป็นรูปแบบ key  
// key ในที่นี้จะเอาชื่อ column มาอ้างอิง
echo "รหัสพนักงาน = ".$row["emp_id"]."<br>";
echo "ชื่อ = ".$row["emp_fname"]."<br>";
echo "สกุล = ".$row["emp_lname"]."<br>";
echo "เพศ = ".$row["emp_gender"]."<br>";
echo "ทักษะ = ".$row["emp_skills"]."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "รหัสพนักงาน = ".$row["emp_id"]."<br>";
echo "ชื่อ = ".$row["emp_fname"]."<br>";
echo "สกุล = ".$row["emp_lname"]."<br>";
echo "เพศ = ".$row["emp_gender"]."<br>";
echo "ทักษะ = ".$row["emp_skills"]."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "รหัสพนักงาน = ".$row["emp_id"]."<br>";
echo "ชื่อ = ".$row["emp_fname"]."<br>";
echo "สกุล = ".$row["emp_lname"]."<br>";
echo "เพศ = ".$row["emp_gender"]."<br>";
echo "ทักษะ = ".$row["emp_skills"]."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "รหัสพนักงาน = ".$row["emp_id"]."<br>";
echo "ชื่อ = ".$row["emp_fname"]."<br>";
echo "สกุล = ".$row["emp_lname"]."<br>";
echo "เพศ = ".$row["emp_gender"]."<br>";
echo "ทักษะ = ".$row["emp_skills"]."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "รหัสพนักงาน = ".$row["emp_id"]."<br>";
echo "ชื่อ = ".$row["emp_fname"]."<br>";
echo "สกุล = ".$row["emp_lname"]."<br>";
echo "เพศ = ".$row["emp_gender"]."<br>";
echo "ทักษะ = ".$row["emp_skills"]."<br>";
echo "<hr>";




?>