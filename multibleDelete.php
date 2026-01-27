<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

//รับค่าและกำหนดตัวแปร
//แปลง array ให้เป็น string โด้ยใช้รูปแบบก่อนหน้านี้ที่เคยทำมา
// $multible_id = implode(",",$_POST["emp_idcheckbox"]);

// var_dump($multible_id);

//รับค่าและกำหนดตัวแปร
$emp_id_arr = $_POST["emp_idcheckbox"];
// ทำการนำ $emp_id_arr มาเก็บในตัวแปรใหม่แล้วทำการแปลงค่าให้เป็น string
$multible_id = implode(",",$emp_id_arr);
// ทำการแสดงผล
// var_dump($multible_id);

//ลบข้อมูลด้วยคำสั่ง sql 
$sql = "DELETE FROM employees WHERE emp_id in ($multible_id)";

// ทำการสั่งรัน
$result = mysqli_query($con,$sql);

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