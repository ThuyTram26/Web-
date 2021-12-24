<?php
if (!isset($bien_bao_mat)) {
	exit();
}
?>
<br>
<center>
	<a href="index.php" style="font-size:72px;color:black;text-decoration:none">Quản trị cửa hàng</a>
</center>
<br><br>
<table width="990px" style="  list-style-type: none;margin: auto;padding: 0;overflow: hidden;background-color: #b4b4b4;border-radius: 4px;">
	<tr>
		<td width="900px">
			<a href="index.php" class="lk_1">Trang chủ</a>
			<a href="?thamso=menu" class="lk_1">Nhóm Sản Phẩm </a>
			<a href="?thamso=san_pham" class="lk_1">Sản Phẩm</a>
			<a href="?thamso=hoa_don" class="lk_1">Hóa Đơn</a>
			<a href="?thamso=khach_hang" class="lk_1">Khách Hàng</a>
			<a href="?thamso=nhan_vien" class="lk_1">Nhân Viên</a>
		</td>
		<td align="right">
			<a href="?thamso=thoat" class="lk_1">Thoát</a>
		</td>
	</tr>
</table>
<br><br>
<br><br>
<?php
include("./dieu_huong.php");
?>
<div>
	<h3>Cửa hàng : ViNi 1 </h3>
	<p>Quản trị viên : Nguyễn Minh Lợi </p>
	<p>Điện thoại : 0329960377 </p>

</div>