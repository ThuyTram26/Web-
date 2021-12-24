
<?php
	session_start(); 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	  <meta  http-equiv="X-UA-Compatible" content="ie-edge"  charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <title>Thông tin Cựu Sinh Viên</title>
      
</head>
<body>
 
<?php
    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
  //  $data = [];
   /* while ($row =  mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            'ten' => $row['ten'],
            'bday' => $row['bday'],
            'gender' => $row['gender'],
            'sdt' => $row['sdt'],
            'fb' => $row['fb'],
            'zl' => $row['zl'],
            'email' => $row['email'],
            'cty' => $row['cty'],
        );
    }*/

    // var_dump($data);die;
    // print_r($data);die;
    ?>
    
 <?php
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
  //  include_once(__DIR__ . '/dbconnect.php');
    $conn = mysqli_connect('localhost', 'root', '', 'data');
    mysqli_set_charset($conn, 'UTF8');

     if (isset($_GET['search']) && !empty($_GET['search'])){

        $keyword = $_GET['search'];
        $sql = "SELECT * FROM thongtin WHERE ten LIKE '%$keyword%' OR bday LIKE '%$keyword%' OR gender LIKE '%$keyword%' OR sdt LIKE '%$keyword%' 
        OR fb LIKE '%$keyword%' OR zl LIKE '%$keyword%' OR email LIKE '%$keyword%' OR cty LIKE '%$keyword%'";

    } else {
    // 2. Chuẩn bị QUERY
    // HERE DOC
    $sql = "SELECT * FROM thongtin ";
    }
   
    // 3. Yêu cầu PHP thực thi QUERY
   // $result = mysqli_query($conn, $sql);
    $query = mysqli_query($conn,$sql);
?>
    
	<br><br>
        <div class="container">

            <form id="s" action="" method="GET" >
                <input type="text" name="search" value=""  />
                <input type="submit" value="Tìm kiếm" />
                
            <table class="table">   
                  <thead>
                     <tr>
      <th scope="col">Họ và tên</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Facebook</th>
      <th scope="col">Zalo</th>
      <th scope="col">Email</th>
      <th scope="col">Tên Công ty</th>
      <th scope="col">Sửa / Xóa </th>
                      </tr>
              </thead>
              <tbody>
              <?php 
		while ( $thongtin = mysqli_fetch_array($query) ) {
			$i = 1;
			$id = $thongtin['id'];
	?>
            <tr>
      <td><?php echo $thongtin['ten']; ?></td>
      <td><?php echo $thongtin['bday']; ?></td>
      <td><?php echo $thongtin['gender']; ?></td>
      <td><?php echo $thongtin['sdt']; ?></td>
      <td><?php echo $thongtin['fb']; ?></td>
      <td><?php echo $thongtin['zl']; ?></td>
      <td><?php echo $thongtin['email']; ?></td>
      <td><?php echo $thongtin['cty']; ?></td>
      <td>
       <a href="sua_thong_tin.php?id=<?php echo $id;?>">Sửa thông tin</a>
       <br>
       <a href="xoa_thong_tin.php?id_delete=<?php echo $id;?>">Xóa thông tin</a>
        </td>
</tr>
       
<?php 
			$i++;
		}
	?>

              <?php

                // Nếu người dùng đã bấm SAVE
                if(isset($_POST['btn_submit'])) {
                // Truy vấn database để lấy danh sách
              // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
                // require_once ("./dbconnect.php");
   
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
 
              $sql= "INSERT INTO thongtin (ten,bday,gender,sdt,fb,zl,email,cty) VALUES ('$ten','$bday','$gender','$sdt','$fb','$zl','$email','$cty')";
                       if (mysqli_query($conn, $sql)){
                     echo "Thêm bản ghi thành công.";
                 } else{
                   echo "ERROR: Không thể thực thi. " ;
                  }
                         $conn->close();
                //	header('Location: login.php');   
            ?>

            </tbody>
          </table>
      </div>
</body>
</html>