<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="SELECT * FROM thongtin ";
	$tv_1=$mysqli->query($tv);
	if($tv_2=mysqli_fetch_array($tv_1))
	{
		$truy_van_xoa="UPDATE thongtin SET TrangThai='' WHERE MSNV = $id ";
		$mysqli->query($truy_van_xoa);
	}
	else 
	{
		thong_bao_html("Thông tin này không tồn tại");
	}
?>