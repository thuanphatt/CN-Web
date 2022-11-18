<?php
session_start();
include('../db/connect.php');
?>
<?php
// session_destroy();
// unset('dangnhap');
if (isset($_POST['dangnhap'])) {
	$taikhoan = $_POST['taikhoan'];
	$matkhau = md5($_POST['matkhau']); //? Đây là chuẩn hoá
	if ($taikhoan == '' || $matkhau == '') {
		echo '<p>Xin nhập đủ</p>';
	} else {
		$sql = "SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1";
		$sql_select_admin = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
		if (isset($sql_select_admin)) {
			$_SESSION['dangnhap'] = $sql_select_admin['admin_name'];
			$_SESSION['admin_id'] = $sql_select_admin['admin_id'];
			header('Location: dashboard.php');
		} else {
			echo '<p>Tài khoản hoặc mật khẩu sai</p>';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <h2 align="center">Đăng nhập Admin</h2>
    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <form action="" method="POST">
                <label>Tài khoản</label>
                <input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
                <label>Mật khẩu</label>
                <input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>
                <input type="submit" name="dangnhap" class="btn btn-success text-center" value="Đăng nhập">
            </form>
        </div>
    </div>
</body>

</html>