<?php
// 1 ชื่อต่อกับฐานข้อมูล
require('dbconnect.php');

$sql = "SELECT * FROM employees"; // 2 คำสั่ง sql ในการทำงานก็จะทำงานดึงข้อมูลมาทั้งหมดเลย

//  3 คำสั่งรัน sql
$result = mysqli_query($con,$sql); 

// 4 คำสั่งในการดึงข้อมูลรูปแบบ Row
$row = mysqli_fetch_row($result);

// 5 ทำการแสดง type ของ row  ว่าจะมี type เป็นอะไร
// echo gettype($row);

// 6 แสดงข้อมูล
print_r($row);

// 7 ทำการดึงข้อมูลรหัสพนักงาน
                //  ดึงข้อมูลในแถวนั้น แต่ดึงข้อมูลจาก index 0 หรือถ้าเอาง่ายๆเลยก็คือ c1
// echo "รหัสพนักงาน = ".$row[0]."<br>";
// echo "ชื่อ = ".$row[1]."<br>";
// echo "สกุล = ".$row[2]."<br>";
// echo "เพศ = ".$row[3]."<br>";
// echo "ทักษะ = ".$row[4]."<br>";
// echo "<hr>";

// $row = mysqli_fetch_row($result);
// echo "รหัสพนักงาน = ".$row[0]."<br>";
// echo "ชื่อ = ".$row[1]."<br>";
// echo "สกุล = ".$row[2]."<br>";
// echo "เพศ = ".$row[3]."<br>";
// echo "ทักษะ = ".$row[4]."<br>";
// echo "<hr>";


?>