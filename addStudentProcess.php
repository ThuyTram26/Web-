<?php
$conn = mysqli_connect('localhost', 'root', '', 'data') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");
echo (isset($_POST['confirm']));
if (isset($_POST['confirm'])) {
    $ho_va_ten = $_POST['ten'];
    $bday = $_POST['bday'];
    $gioi_tinh = $_POST['gender'];
    $sdt = $_POST['sdt'];
    $fb = $_POST['fb'];
    $zl = $_POST['zl'];
    $email = $_POST['email'];
    $cty = $_POST['cty'];


    if (empty($ho_va_ten)) {
        echo ("Tên là bắt buộc");
    }
    // $sql = "INSERT INTO quan_tri (username, password) VALUES ('$username','$hash')";
    $sql = "INSERT INTO thongtin (ten, bday, gender, sdt, fb, zl, email, cty) VALUES ('$ho_va_ten','$bday','$gioi_tinh','$sdt','$fb','$zl','$email','$cty')";
    $result1 = mysqli_query($conn, $sql);
    if ($result1) {
        echo '<script language="javascript">alert("Thêm thành công!"); window.location="thongtin.php";</script>';
    } else {
        echo '<script language="javascript">alert("Có lỗi xảy ra"); window.location="cuu-SV.php";</script>';
    }
}
