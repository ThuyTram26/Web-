
<?php
	session_start();
	$bien_bao_mat="co";
    include("./dbconnect.php");	
	include("./xac_dinh_dang_nhap.php");
	include("./ham.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("./xu_ly_post_get.php");
		}   
	}
?>
<html>

	<body>
		<?php 
			if(!isset($xac_dinh_dang_nhap))
			{
				include("./khung_dang_nhap.php");
			}
			else 
			{
				if($xac_dinh_dang_nhap=="co")
				{
					echo "<center>";
						include("./trang_chu.php");
					echo "</center>";
				}
			}
		?>
	</body>
</html>