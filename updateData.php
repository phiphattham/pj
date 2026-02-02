<?php

require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$emp_id = $_POST["emp_id"];
$emp_fname = $_POST["emp_fname"]; 
$emp_lname = $_POST["emp_lname"];
$emp_gender = $_POST["emp_gender"];
$emp_emskills = implode(",",$_POST['emp_skills']);  // array => string

// คำสั่ง sql ในการ update ข้อมูล
//                      เปลี่ยนค่า   เหตุผลที่ใส่ซิงเกิลโคท เพราะว่าเป็น string varcha
$sql = "UPDATE employees SET emp_id = '$emp_id', emp_fname = '$emp_fname', emp_lname = '$emp_lname', 
emp_gender = '$emp_gender', emp_skills = '$emp_emskills' WHERE emp_id = $emp_id";

// แสดงผล
// echo $sql;

// คำสั่งรัน sql
$result = mysqli_query($con, $sql);

// เช็คเงื่อนไข
if($result){
    //ระบุการส่งข้อมูลแล้วให้กลับไปในหน้าไหน
    header("location:index.php");
    //และให้สิ้นสุดการทำงานของตัวโปรแกรม
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
}



?>