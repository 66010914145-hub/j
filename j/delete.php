<meta charset="utf-8">
<?php
    include_once("connectdb.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM regions WHERE r_id = '$id'";

        // รันคำสั่งลบ โดยไม่ใช้ die เพื่อไม่ให้หน้าจอหยุดค้างที่ข้อความ error
        mysqli_query($conn, $sql);
    }

    // สั่งให้กระโดดกลับไปหน้า a.php ทันที ไม่ว่าจะลบสำเร็จหรือไม่
    echo "<script>";
    echo "window.location='a.php';";
    echo "</script>";
?>