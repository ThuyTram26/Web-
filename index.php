
<?php
	session_start();
	$bien_bao_mat="co";
    include("../dbconnect.php");	
	include("quan_tri/quan_tri_2/xac_dinh_dang_nhap.php");
	include("quan_tri/quan_tri_2/ham.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("quan_tri/quan_tri_2/xu_ly_post_get.php");
		}   
	}
?>
<html>

	<body>
		<?php 
			if(!isset($xac_dinh_dang_nhap))
			{
				include("quan_tri/quan_tri_2/khung_dang_nhap.php");
			}
			else 
			{
				if($xac_dinh_dang_nhap=="co")
				{
					echo "<center>";
						include("quan_tri/quan_tri_2/trang_chu.php");
					echo "</center>";
				}
			}
		?>
	</body>
</html>