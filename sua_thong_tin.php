<?php require_once("./dbconnect.php"); ?>
<?php
//$id=$_GET['id'];
//$tv="SELECT * FROM thongtin WHERE id='$id'";
//$tv_1=$mysqli->query($tv);
//$tv_2=mysqli_fetch_array($tv_1);
// $link_dong="?thamso=quan_ly_thong_tin=";


// Nếu người dùng đã bấm SAVE
if (isset($_POST['btn_submit'])) {


  $ten = $_POST['ten'];
  //$ten=str_replace("'","&#39;",$ten);		

  $bday = $_POST['bday'];
  // $bday=str_replace("'","&#39;",$bday);

  $gender = $_POST['gender'];
  // $gender=str_replace("'","&#39;",$gender);

  $sdt = $_POST['sdt'];
  // $sdt=str_replace("'","&#39;",$sdt);

  $fb = $_POST['fb'];
  // $fb=str_replace("'","&#39;",$fb);

  $zl = $_POST['zl'];
  // $zl=str_replace("'","&#39;",$zl);

  $email = $_POST['email'];
  // $email=str_replace("'","&#39;",$email);

  $cty = $_POST['cty'];
  // $cty=str_replace("'","&#39;",$cty);

  $id = $_POST["id"];
  $sql = "UPDATE thongtin  SET 
 ten='$ten',
 bday='$bday',
 gender='$gender',
 sdt='$sdt',
 fb='$fb',
 zl='$zl',
 email='$email',
 cty='$cty'
 WHERE id=$id";
  mysqli_query($mysqli, $sql);

  $mysqli->close();
  //	header('Location: login.php');   
}
$id = -1;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$sql = "SELECT * FROM thongtin WHERE id = " . $id;
$query = mysqli_query($mysqli, $sql);
?>
<?php
while ($data = mysqli_fetch_array($query)) {
?>
  <div>
    <form action="" method="POST" class="form">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <a href="./thongtin.php" class="lk_a1" style="margin-right:30px">Đóng</a>
      <h2>Thông tin Cựu Sinh Viên</h2>
      <table>
        <tr>

          <td>Họ và tên :</td>
          <td><input type="text" name="ten" value="<?php echo $data['ten'] ?>"></td>
        </tr>
        <tr>
          <td>Ngày sinh :</td>
          <td><input type="date" id="bday" name="bday" value="<?php $data['bday'] ?>"></td>
        </tr>
        <tr>
          <td>Giới tính :</td>
          <td><input type="radio" value="Nam" name="gender" id="gender" value="<?php echo $data['gender']; ?>">
            <label for="Nam">Nam</label>

            <input type="radio" value="Nữ" name="gender" id="gender" value="<?php echo $data['gender']; ?>">
            <label for="Nữ">Nữ</label>
          </td>
        </tr>
        <tr>
          <td>Số điện thoại :</td>
          <td><input type="text" id="sdt" name="sdt" value="<?php echo $data['sdt']; ?>"></td>
        </tr>
        <tr>
          <td>Facebook :</td>
          <td><input type="text" id="fb" name="fb" value="<?php echo $data['fb']; ?>"></td>
        </tr>
        <tr>
          <td>Zalo :</td>
          <td><input type="text" id="zl" name="zl" value="<?php echo $data['zl']; ?>"></td>
        </tr>
        <tr>
          <td>Email :</td>
          <td><input type="text" id="email" name="email" value="<?php echo $data['email']; ?>"></td>
        </tr>
        <tr>
          <td>Tên Công ty :</td>
          <td><input type="text" id="cty" name="cty" value="<?php echo $data['cty']; ?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2" align="center"><input type="submit" name="sua_thong_tin" value="Sửa thông tin"></td>
        </tr>

      </table>

    </form>
  <?php } ?>
  </div>

  <?php /*

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
 
      $sql= "UPDATE thongtin  SET 
      ten='$ten',
      bday='$bday',
      gender='$gender',
      sdt='$sdt',
      fb='$fb',
      zl='$zl',
      email='$email',
      cty='$cty'
      WHERE ten=$ten";
		mysqli_query($conn, $sql);
     
                  $conn->close();
           //	header('Location: login.php');   */
  ?>