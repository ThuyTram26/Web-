<?php
if (!isset($bien_bao_mat)) {
	exit();
}
function thong_bao_abc($c)
{
	$lien_ket_trang_truoc = $_SERVER['HTTP_REFERER'];
?>
	<html>

	<head>
		<meta charset="UTF-8">
		<title>Thông báo</title>
	</head>

	<body>
		<style>
			a.trang_truoc_c8w {
				text-decoration: none;
				color: blue;
				font-size: 36px;
				margin-left: 50px
			}

			a.trang_truoc_c8w:hover {
				color: red;
			}
		</style>
		<br><br><br><br>
		<a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w">Bấm vào đây để trở về trang trước</a>
		<script type="text/javascript">
			alert("<?php echo $c; ?>");
		</script>
	</body>

	</html>
<?php
	exit();
}
function trang_truoc_abc()
{
?>
	<html>

	<head>
		<meta charset="UTF-8">
		<title>Đang chuyển về trang trước</title>
	</head>

	<body>
		<script type="text/javascript">
			window.history.back();
		</script>
	</body>

	</html>
<?php
}

if (isset($_POST['dang_nhap_quan_tri'])) {
	$username = $_POST['username'];
	$username = str_replace("'", "", $username);
	$username = str_replace('"', "", $username);

	$password = md5($_POST['password']);


	$tv = "select count(*) from quan_tri where username='$username' and password='$password' ";
	$tv_1 = $mysqli->query($tv);
	$tv_2 = mysqli_fetch_array($tv_1);
	if ($tv_2[0] == 1) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
	} else {
		thong_bao_abc("Thông tin nhập vào không đúng");
	}
	trang_truoc_abc();
}

if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$tv = "select count(*) from quan_tri where username='$username' and password='$password' ";
	$tv_1 = $mysqli->query($tv);
	$tv_2 = mysqli_fetch_array($tv_1);
	if ($tv_2[0] == 1) {
		$xac_dinh_dang_nhap = "co";
	}
}
?>