<?php
// 8 ชื่อต่อกับฐานข้อมูล
require('dbconnect.php');

$sql = "SELECT * FROM employees"; 
//  คำสั่ง sql ในการทำงานก็จะทำงานดึงข้อมูลมาทั้งหมดเลย
// อยู่ที่ว่าจะสอบถามข้อมูลแบบใดเลือกแบบที่ต้องการ

//  คำสั่งรัน sql
$result = mysqli_query($con, $sql); 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">   
</head>
<body>
    <!-- 9 เพื่อหัวข้อ -->
    <h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
    <!-- 1 สร้างตารางหรือ table ให้พอเป็นโครง -->
    <table border="2"> <!-- 5 ใส่เส้นขอบให้กับตัวตารางเลย -->
        <!-- 2 ต่อมาทำการสร้างส่วนหัวตาราง -->
        <thead>
            <!-- 3 สร้างเป็นรูปแบบแถว -->
             <tr>
                <!-- 4 หัว column หรือหัวตาราง -->
                 <th>รหัสพนักงาน</th>
                 <th>ชื่อ</th>
                 <th>นามสกุล</th>
                 <th>เพศ</th>
                 <th>ทักษะความสามาร</th>
             </tr>
        </thead>
        <!-- 6 เนื้อหาที่อยู่ในตาราง -->
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){?>
            <!-- 7 ทำการสร้างแถวใหม่ขึ้นมา -->
            <tr>
                <!-- 8 โดยใส่อ้างให้ตรงตาม column -->
                <td> <?php echo $row["emp_id"] ;?> </td>
                <td> <?php echo $row["emp_fname"] ;?> </td>
                <td> <?php echo $row["emp_lname"] ;?> </td>
                <td> <?php echo $row["emp_gender"] ;?> </td>
                <td> <?php echo $row["emp_skills"] ;?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="insertForm.php">บันทึกข้อมูล</a>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->

</body>
</html>