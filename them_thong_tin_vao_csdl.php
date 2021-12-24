<?php
    session_start();    
?>
<?php
	    // Nếu người dùng đã bấm SAVE
        $conn = mysqli_connect('localhost', 'root', '', 'data');
        $query = mysqli_query($conn, $sql);
        if(isset($_POST['btn_submit'])) {
        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
            require_once ("./dbconnect.php");
	$ten =trim($_POST['ten']);
	$ten=str_replace("'","&#39;",$ten);		

	$bday=trim($_POST['bday']);
    $bday=str_replace("'","&#39;",$bday);

	$gender=trim($_POST['gender']);
    $gender=str_replace("'","&#39;",$gender);

	$sdt=trim($_POST['sdt']);
    $sdt=str_replace("'","&#39;",$sdt);

    $fb=trim($_POST['fb']);
    $fb=str_replace("'","&#39;",$fb);

    $zl=trim($_POST['zl']);
    $zl=str_replace("'","&#39;",$zl);

    $email=trim($_POST['email']);
    $email=str_replace("'","&#39;",$email);

    $cty=trim($_POST['cty']);
    $cty=str_replace("'","&#39;",$cty);
       }

    $sql= "INSERT INTO thongtin (ten, bday, gender, sdt, fb, zl, email, cty) VALUES ('$ten','$bday','$gender','$sdt','$fb','$zl','$email','$cty')";
    if (mysqli_query($conn, $sql)){
     echo "Thêm bản ghi thành công.";
 } else{
     echo "ERROR: Không thể thực thi. " ;
 }
   $conn->close();

		?>
	