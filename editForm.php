<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าและเก็บไว้ในตัวแปร
$emp_id = $_GET["emp_id"];

// ทำการสอบถามข้อมูล
$sql = "SELECT * FROM employees WHERE emp_id = $emp_id";

// ต่อมาให้นำคำสั่ง sql ไปใช้งานหรือรัน
$result = mysqli_query($con,$sql);

// การตอบกลับข้อมูลโดยใช้ assoc มาในรูปแบบ array โดยดึงข้อมูลมาแค่คนเดียว
$row = mysqli_fetch_assoc($result);

//แสดงข้อมูล
// print_r($row);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <!-- 7-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <!-- 9 ทำการใส่ class container เพื่อให้ข้อมูลอบยู่ในบล็อกเดียวกัน -->
    <div class="container my-3">
        <!-- 1 -->
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2> <!--ถ้าอยากให้ข้อมูลตัวนี้อยู่ตรงกลางก็ใส่คลาสให้เขา โดยใช้ text-center-->
        <!-- 3 --> <!--6-->
        <form action="insertData.php" method="post">
            
            <!-- 4 --> <!--8 ทำการกรุ๊ปฟอร์มใน class div-->
            <div class="form-group">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="emp_fname" id="" class="form-control" value="<?php echo $row["emp_fname"]; ?>">
            </div>
            <div class="form-group">
                <label for="lastnename">นามสกุล</label>
                <input type="text" name="emp_lname" id="" class="form-control" value="<?php echo $row["emp_lname"]; ?>">
            </div>
            <!-- 10 ทำการสร้างฟอร์มเพื่อทำการเก็บค่าเพศ -->
            <div class="form-group">
                <label for="gender">เพศ</label>
                <?php 
                    if($row["emp_gender"] == "male"){
                        echo "<input type='radio' name='emp_gender' value='male' checked>ชาย";
                        echo "<input type='radio' name='emp_gender' value='female'>หญิง";
                        echo "<input type='radio' name='emp_gender' value='other'>อื่นๆ";
                    }elseif($row["emp_gender"] == "female"){
                        echo "<input type='radio' name='emp_gender' value='male'>ชาย";
                        echo "<input type='radio' name='emp_gender' value='female' checked>หญิง";
                        echo "<input type='radio' name='emp_gender' value='other'>อื่นๆ";
                    }else{
                        echo "<input type='radio' name='emp_gender' value='male'>ชาย";
                        echo "<input type='radio' name='emp_gender' value='female'>หญิง";
                        echo "<input type='radio' name='emp_gender' value='other' checked>อื่นๆ";
                    }          
                ?>
            </div>
            <!-- 11 -->
            <div class="form-group">
                <label for="">ทักษะ / ความสามารถ</label>
                                         <!-- skill จะระบุเป็น Array อาจมีหลายความสามารถ -->
                <input type="checkbox" name="emp_skills[]" value="Java">Java
                <input type="checkbox" name="emp_skills[]" value="PHP">PHP
                <input type="checkbox" name="emp_skills[]" value="Python">Python
                <input type="checkbox" name="emp_skills[]" value="HTML">HTML
            </div>
            <!-- 5 -->
            <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success my-2">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
            
        </form>
        <!-- 2 -->
    </div>


    <!-- 7 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>