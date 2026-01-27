<?php
// 8 ชื่อต่อกับฐานข้อมูล
require('dbconnect.php');

$sql = "SELECT * FROM employees ORDER BY emp_fname ASC";
//  คำสั่ง sql ในการทำงานก็จะทำงานดึงข้อมูลมาทั้งหมดเลย
// อยู่ที่ว่าจะสอบถามข้อมูลแบบใดเลือกแบบที่ต้องการ

//  คำสั่งรัน sql
$result = mysqli_query($con, $sql);

// ทำการสร้างตัวแปรทำการนับแถว
$count = mysqli_num_rows($result);

// การกำหนดตัวแปรทำลำดับที่
$order = 1;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- 9 เพื่อหัวข้อ -->
        <h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
        <!-- 27/1 สร้างเส้นคั่น -->
        <hr>
        <!-- ทำการตรวจเช็คว่า $count มีมากกว่า 0 รึป่าว -->
        <?php if ($count > 0) { ?>
            <!-- 27/2 สร้างฟอร์ม -->
            <form action="deleteTextField.php" class="form-group" method="POST">
                <!-- 27/3 จะให้ป้อนรหัสพนักงานเพื่อทำการลบ -->
                <label for="">รหัสพนักงาน</label>
                <!-- 27/4 ทำการระบุ input เพื่อให้สามารถกรอกข้อมูลที่เราต้องการลบ -->
                <input type="text" placeholder="ป้อนรหัสพนักงานเพื่อลบ" name="emp_id" class="form-control">
                <!-- 24/5 ทำการสร้างปุ่มเพื่อทำการกดลบข้อมูล -->
                <input type="submit" value="ลบข้อมูล" class="btn btn-danger my-2">
            </form>
            <!-- 1 สร้างตารางหรือ table ให้พอเป็นโครง -->
            <table class="table table-bordered mt-2"> <!-- 5 ใส่เส้นขอบให้กับตัวตารางเลย -->
                <!-- 2 ต่อมาทำการสร้างส่วนหัวตาราง -->
                <thead>
                    <!-- 3 สร้างเป็นรูปแบบแถว -->
                    <tr>
                        <!-- 4 หัว column หรือหัวตาราง -->
                        <th>ลำดับที่</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เพศ</th>
                        <th>ทักษะความสามาร</th>
                        <th>ลบข้อมูล</th> <!-- 27/10 เพิ่มหัวข้อ-->
                        <th>ลบข้อมูล (Checkbox)</th> <!-- เพิ่มหัวตาราง -->
                    </tr>
                </thead>
                <!-- 6 เนื้อหาที่อยู่ในตาราง -->
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <!-- 7 ทำการสร้างแถวใหม่ขึ้นมา -->
                        <tr>
                            <!-- 8 โดยใส่อ้างให้ตรงตาม column -->
                            <td> <?php echo $order++ ; ?> </td>
                            <td> <?php echo $row["emp_fname"]; ?> </td>
                            <td> <?php echo $row["emp_lname"]; ?> </td>
                            <td>
                                <?php
                                // ถ้า row emp_gender มีค่าเท่ากับ male จะให้แสดงผลเป็นชาย 
                                // ถ้า row emp_gender มีค่าเท่ากับ female จะให้แสดงผลเป็นหญิง
                                if ($row["emp_gender"] == "male") { ?>
                                    ชาย
                                <?php } elseif ($row["emp_gender"] == "female") { ?>
                                    หญิง
                                <?php } else { ?>
                                    อื่นๆ
                                <?php } ?>
                            </td>
                            <td> <?php echo $row["emp_skills"]; ?> </td>
                            <td>
                                <!-- 27/11 สร้างปุ่ม -->
                                <a href="deleteQueryString.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-danger"
                                    onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a> <!-- 27/11 ตัวลบข้อมูล-->
                            </td>
                            <!-- เพิ่มข้อมูลใน column เข้ามา -->
                            <form action="multibleDelete.php" method="POST">
                                <td>
                                    <input type="checkbox" name="emp_idcheckbox[]" value="<?php echo $row["emp_id"]; ?>">
                                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alert alert-danger">
                ไม่มีข้อมูลพนักงาน
            </div>
        <?php } ?>
        <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูล</a>
        <?php if ($count > 0) { ?>
            <input type="submit" value="ลบข้อมูล (Checkbox)" class="btn btn-danger">
        <?php } ?>
        </form>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->

</body>

</html>