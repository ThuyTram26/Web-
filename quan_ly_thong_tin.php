<!DOCTYPE html>
<html lang="en">
<head>
	  <meta  http-equiv="X-UA-Compatible" content="ie-edge"  charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>
<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	//$so_dong_tren_mot_trang=20;
	//if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="SELECT * FROM thongtin";
	$tv_1=$mysqli->query($tv);
	$tv_2=mysqli_fetch_array($tv_1);
	//$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	//$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="SELECT * FROM thongtin ";
	$tv_1=$mysqli->query($tv);
?>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Tên</b></td>
		<td width="550px" ><b>Địa Chỉ</b></td>
		<td align="center" width="220px" ><b>Sửa</b></td>
		<td align="center" width="220px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$ten=$tv_2['ten'];
			$bday=$tv_2['bday'];
			$gender=$tv_2['gender'];
            $sdt=$tv_2['sdt'];
            $fb=$tv_2['fb'];
            $zl=$tv_2['zl'];
            $email=$tv_2['email'];
            $cty=$tv_2['cty'];
			$link_sua="?thamso=sua_thong_tin=";
			$link_xoa="?xoa_thong_tin=";
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $ten; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $bday; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $gender; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $sdt; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $fb; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $zl; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $email; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $cty; ?></a>
					</td>					
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	<tr>
		<td colspan="3" align="center" >
			<br>
			<?php /*
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_thong_tin=".$i;
					//echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				} */
			?>
			<br><br>
		</td>
	</tr>
</table>