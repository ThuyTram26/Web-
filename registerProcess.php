<?php
$conn = mysqli_connect('localhost', 'root', '', 'data') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");

if (isset($_POST['dangky'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $password1 = trim($_POST['password1']);


    if (empty($username)) {
        echo ("Username is required");
    }
    if (empty($password)) {
        echo ("Two password do not match");
    }
    $sql = "SELECT * FROM quan_tri WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="index.php";</script>';
    } else {
        $hash = md5($password);
        $sql = "INSERT INTO quan_tri (username, password) VALUES ('$username','$hash')";
        $result1 = mysqli_query($conn, $sql);
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php";</script>';
    }
}
