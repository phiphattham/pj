<?php

use LDAP\Result;

// เชื่อมต่อฐานข้อมูล
//1
// $con = mysqli_connect("localhost","root","","mydata") or die("เกิดข้อผิดพลาด");
//2
require('dbconnect.php');


// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$emp_fname = $_POST["emp_fname"]; 
$emp_lname = $_POST["emp_lname"];
$emp_gender = $_POST["emp_gender"];
$emp_emskills = implode(",",$_POST['emp_skills']);  // array => string

// บันทึกข้อมูล                   คอลัมน์จับคู่กับตัวแปร     
$sql = "INSERT INTO employees(emp_fname, emp_lname, emp_gender, emp_skills) VALUE('$emp_fname','$emp_lname','$emp_gender', '$emp_emskills')";

//แสดงผลให้ดูก่อน
// echo $sql;

//คำสั่งที่ใช้ในการทำงาน
$result = mysqli_query($con,$sql); //คำสั่งรัน sql
//ทำการ return ค่ากลับมา หรือเก็บค่าไว้ที่ตัวแปรนึง

//การตรวจเช็คผลลัพธ์ sql ว่าทำงานได้จริงไหม
if($result){
    echo "บันทึกข้อมูลเรียบร้อย";
}else{
    echo mysqli_error($con);
}



?>