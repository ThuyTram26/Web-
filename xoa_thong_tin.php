
<?php
include_once('./dbconnect.php');
$id = $_GET['id_delete'];
$tv = "SELECT * FROM thongtin ";
$tv_1 = $mysqli->query($tv);
if ($tv_2 = mysqli_fetch_array($tv_1)) {
	$sql = "DELETE FROM `thongtin` WHERE id = '$id'";
	$query = mysqli_query($mysqli, $sql);
	echo '<script language="javascript">alert("Đã xóa thành công"); window.location="thongtin.php";</script>';
}
?>