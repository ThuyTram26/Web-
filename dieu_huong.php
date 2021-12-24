<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['thamso'])){$thamso="";}else{$thamso=$_GET['thamso'];}
	
	switch($thamso)
	{
		
		case "lien_ket_thong_tin":
			include("thong_tin/lien_ket_thong_tin.php");
		break;
		case "thongtin":
			include("thong_tin/thongtin.php");
		break;
		case "quan_ly_thong_tin":
			include("thong_tin/quan_ly_thong_tin.php");
		break;
		case "sua_thong_tin":
			include("thong_tin/sua_thong_tin.php");
		break;
		/*
		case "san_pham_trang_chu":
			include("chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
		break;
		case "slideshow":
			include("chuc_nang/slideshow/lien_ket_slideshow.php");
		break;
		case "them_slideshow":
			include("chuc_nang/slideshow/them_slideshow.php");
		break;
		case "quan_ly_slideshow":
			include("chuc_nang/slideshow/quan_ly_slideshow.php");
		break;
		case "sua_slideshow":
			include("chuc_nang/slideshow/sua_slideshow.php");
		break;
		case "sua_banner":
			include("chuc_nang/banner/sua_banner.php");
		break;
		case "sua_footer":
			include("chuc_nang/footer/sua_footer.php");
		break;
		default: 
			include("chuc_nang/quan_tri_2/trang_chu_2.php");  */
	}
?>