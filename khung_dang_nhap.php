<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<center>
	<form method="post" >
		<table>
			<tr>
				<td>Tài Khoản :</td>
				<td><input style="width:150px" name="username" ></td>
			</tr>
			<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" style="width:150px" name="password" ></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
					<input type="submit" value="Đăng nhập" >
				</td>
			</tr>
		</table>
	</form>
	<form method="post" action="registerProcess.php" >
		<table>
			<tr>
				<td>Tài Khoản :</td>
				<td><input style="width:150px" name="username" ></td>
			</tr>
			<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" style="width:150px" name="password" ></td>
			</tr>
			<tr>
				<td>Nhập lại mật khẩu :</td>
				<td><input type="password" style="width:150px" name="password1" ></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="dangky" value="Đăng Ký"/>
				</td>
			</tr>
		</table>
	</form>
</center>
