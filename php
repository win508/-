<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ข้อมูล</title>
</head>
<body>
    <h2>ข้อมูล</h2>

    <?php
    $name="ธนวินท์ ปัถวี";
    $grade="ม.6";
    $room="ห้อง8";
    $number="1";
    $adress="2 หมู่ 10 อ.พระประแดง ต.บางหญ้าแพรก จ.สมุทรปราการ";
    $education="ปฐมโรงเรียนเซนต์แมรี่ มัธยมโรงเรียนบางปะกอก";

    echo "<p><strong>ชื่อ-นามสกุล: </strong> $name</p>";
    echo "<p><strong> ระดับชั้น: </strong>" $grade</p>";
    echo "<p><strong> ห้องเรียน: </strong>" $room</p>";
    echo "<p><strong> เลขที่: </strong>" $number</p>";
    echo "<p><strong> ที่อยู่: </strong>" $adress</p>";
    echo "<p><strong> การศึกษา: </strong>" $education</p>";
    ?>
</body>
</html>
