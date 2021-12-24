<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="ie-edge" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>Thông tin Cựu Sinh Viên</title>
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


  <?php
  // Truy vấn database để lấy danh sách
  // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
  // C:\xampp\htdocs\web02\
  //  include_once('./dbconnect.php');
  $conn = mysqli_connect('localhost', 'root', '', 'data');
  mysqli_set_charset($conn, 'UTF8');

  // if (isset($_GET['search']) && !empty($_GET['search'])) {

  //   $keyword = $_GET['search'];
  //   $sql = "SELECT * FROM thongtin WHERE ten LIKE '%$keyword%' OR bday LIKE '%$keyword%' OR gender LIKE '%$keyword%' OR sdt LIKE '%$keyword%' 
  //       OR fb LIKE '%$keyword%' OR zl LIKE '%$keyword%' OR email LIKE '%$keyword%' OR cty LIKE '%$keyword%'";
  // } else {
  // 2. Chuẩn bị QUERY
  // HERE DOC
  $sql = "SELECT * FROM thongtin ";
  // }

  // 3. Yêu cầu PHP thực thi QUERY
  // $result = mysqli_query($conn, $sql);
  $query = mysqli_query($conn, $sql);
  ?>

  <br><br>
  <div class="container">

    <form id="s" action="" method="GET">


      <table class="table" id="myTable">
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
          while ($thongtin = mysqli_fetch_array($query)) {
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
              <td style="display: flex; justify-content:space-around">
                <a href="sua_thong_tin.php?id=<?php echo $id; ?>"><i class="bi bi-pencil-square"></i> </a>
                <br>
                <a href="xoa_thong_tin.php?id_delete=<?php echo $id; ?>" onclick="return confirm('Bạn có chắc muốn xóa?');"><i class="bi bi-trash"></i></a>
              </td>
            </tr>

          <?php
            $i++;
          }
          ?>


        </tbody>
      </table>
  </div>
</body>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>

</html>