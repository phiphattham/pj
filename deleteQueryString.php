<?php
// 27/13 ทำการเชื่อมต่อฐานข้อมูล
require("dbconnect.php");


// 27/12 การรับแบบ URL
$emp_id = $_GET["emp_id"];

// 27/14 ลบข้อมูลด้วยคำสั่ง sql 
//     ทำการลบข้อมูลในตาราง   โดยมีเงื่อนไขและชื่อ c มีค่าเท่ากับ id ที่ส่งมา
$sql = "DELETE FROM employees WHERE emp_id = $emp_id";

// 27/15 ก็ทำการสั่งรัน
$result = mysqli_query($con,$sql);

// 27/16 เช็คเงื่อนไข
if($result){
    echo "ลบข้อมูลเรียบร้อย <br>";
    echo "<a href='index.php'>กลับไปหน้าแรก</a>";
}else{
    echo "เกิดข้อผิดพลาด";
}



?>