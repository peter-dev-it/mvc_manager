<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm thành viên - Quản lý thành viên</title>
</head>
<body>
	<div class="content">
		<div class="dangkythanhvien">
			<a href="index.php?controller=thanh-vien&action=list" class="list">Danh sách</a>
			<h3>Thêm mới thành viên</h3>
			<form action="" method="POST">
				<table>
					<tr>
						<td>Tên thành viên :</td>
						<td><input type="text" name="hoten" placeholder="Tên thành viên"></td>
					</tr>
					<tr>
						<td>Năm sinh :</td>
						<td><input type="text" name="namsinh" placeholder="Năm sinh"></td>
					</tr>
					<tr>
						<td>Quê quán :</td>
						<td><input type="text" name="quequan" placeholder="Quê quán"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="add_user" value="Thêm mới"></td>
					</tr>
				</table>
			</form>
			<?php 
				if (isset($thanhcong) && in_array('add_success', $thanhcong)) {
					echo "<p style='color: green; text-align: center'>Thêm mới thành công</p>";
				}
			 ?>
		</div>
	</div>
</body>
</html>