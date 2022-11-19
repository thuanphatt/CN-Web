<?php
require('db/connect.php');
if (isset($_POST['themgiohang'])) {
	$tensanpham = $_POST['tensanpham'];
	$sanpham_id = $_POST['sanpham_id'];
	$hinhanh = $_POST['hinhanh'];
	$gia = $_POST['giasanpham'];
	$soluong = $_POST['soluong'];
	$sql = "SELECT * FROM tbl_giohang WHERE sanpham_id='$sanpham_id'";
	$select_giohang = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
	if ($select_giohang > 0) {

		$soluong = $select_giohang['soluong'] + 1;
		$sql_giohang = "UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
	} else {
		$soluong = $soluong;
		$sql_giohang = "INSERT INTO tbl_giohang(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) values ('$tensanpham','$sanpham_id','$gia','$hinhanh','$soluong')";
	}
	$insert_row = $con->query($sql_giohang)->fetch(PDO::FETCH_ASSOC);
	// if($insert_row==0){
	// 	header('Location:index.php?quanly=chitietsp&id='.$sanpham_id);	
	// }

} elseif (isset($_POST['capnhatsoluong'])) {

	for ($i = 0; $i < count($_POST['product_id']); $i++) {
		$sanpham_id = $_POST['product_id'][$i];
		$soluong = $_POST['soluong'][$i];
		if ($soluong <= 0) {
			$sql = "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'";
			$delete_sp = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
		} else {
			$sql = "UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
			$update_sp = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
		}
	}
} elseif (isset($_GET['xoa'])) {
	$id = $_GET['xoa'];
	$sql = "DELETE FROM tbl_giohang WHERE giohang_id='$id'";
	$delete_sp = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
} elseif (isset($_GET['dangxuat'])) {
	$id = $_GET['dangxuat'];
	if ($id == 1) {
		unset($_SESSION['dangnhap_home']);
	}
} elseif (isset($_POST['thanhtoan'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$note = $_POST['note'];
	$address = $_POST['address'];
	$giaohang = $_POST['giaohang'];

	$sql = "INSERT INTO tbl_khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')";
	$sql_khachhang = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
	if ($sql_khachhang) {
		$sql = "SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1";
		$sql_select_khachhang = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
		$mahang = rand(0, 9999);
		$khachhang_id = $sql_select_khachhang['khachhang_id'];
		$_SESSION['dangnhap_home'] = $sql_select_khachhang['name'];
		$_SESSION['khachhang_id'] = $khachhang_id;
		for ($i = 0; $i < count($_POST['thanhtoan_product_id']); $i++) {
			$sanpham_id = $_POST['thanhtoan_product_id'][$i];
			$soluong = $_POST['thanhtoan_soluong'][$i];
			$sql = "INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')";
			$sql_donhang = $con->query($sql)->fetch(PDO::FETCH_ASSOC);

			$sql_giaodich = "INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')";
			$xuly_giaodich = $con->query($sql_giaodich)->fetch(PDO::FETCH_ASSOC);

			$sql_delete_thanhtoan =  "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'";
			$delete_thanhtoan = $con->query($sql_delete_thanhtoan)->fetch(PDO::FETCH_ASSOC);
		}
	}
} elseif (isset($_POST['thanhtoandangnhap'])) {

	$khachhang_id = $_SESSION['khachhang_id'];
	$mahang = rand(0, 9999);
	for ($i = 0; $i < count($_POST['thanhtoan_product_id']); $i++) {
		$sanpham_id = $_POST['thanhtoan_product_id'][$i];
		$soluong = $_POST['thanhtoan_soluong'][$i];
		$sql_donhang =  "INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')";
		$xuly_donhang = $con->query($sql_donhang)->fetch(PDO::FETCH_ASSOC);

		$sql_giaodich = "INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')";
		$xuly_giaodich = $con->query($sql_giaodich)->fetch(PDO::FETCH_ASSOC);

		$sql_delete_thanhtoan =  "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'";
		$delete_thanhtoan = $con->query($sql_delete_thanhtoan)->fetch(PDO::FETCH_ASSOC);
	}
}
?>

<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            Giỏ hàng của bạn
        </h3>
        <?php
		if (isset($_SESSION['dangnhap_home'])) {
			echo '<p style="color:#000;">Xin chào bạn: ' . $_SESSION['dangnhap_home'] . '<a href="index.php?quanly=giohang&dangxuat=1">Đăng xuất</a></p>';
		} else {
			echo '';
		}
		?>

        <!-- //tittle heading -->
        <div class="checkout-right">
            <?php

			$sql_lay_giohang = "SELECT * FROM tbl_giohang ORDER BY giohang_id DESC";
			$lay_giohang = $con->query($sql_lay_giohang)->fetchAll(PDO::FETCH_ASSOC);
			// print_r($lay_giohang);
			?>

            <div class="table-responsive">
                <form action="" method="POST">

                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tên sản phẩm</th>

                                <th>Giá</th>
                                <th>Giá tổng</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$i = 0;
							$total = 0;
							foreach ($lay_giohang as $giohang) {

								// print_r($sql_lay_giohang);

								$subtotal = $giohang['soluong'] * $giohang['giasanpham'];
								$total += $subtotal;
								$i++;
							?>
                            <tr class="rem1">
                                <td class="invert"><?php echo $i ?></td>
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="images/<?php echo $giohang['hinhanh'] ?>" alt=" " height="120"
                                            class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <input type="hidden" name="product_id[]"
                                        value="<?php echo $giohang['sanpham_id'] ?>">
                                    <input type="number" min="1" name="soluong[]"
                                        value="<?php echo $giohang['soluong'] ?>">


                                </td>
                                <td class="invert"><?php echo $giohang['tensanpham'] ?></td>
                                <td class="invert"><?php echo number_format($giohang['giasanpham']) . 'vnđ' ?>
                                </td>
                                <td class="invert"><?php echo number_format($subtotal) . 'vnđ' ?></td>
                                <td class="invert">
                                    <a href="?quanly=giohang&xoa=<?php echo $giohang['giohang_id'] ?>">Xóa</a>
                                </td>
                            </tr>
                            <?php
							}
							?>
                            <tr>
                                <td colspan="7">Tổng tiền : <?php echo number_format($total) . 'vnđ' ?></td>

                            </tr>
                            <tr>
                                <td colspan="7"><input type="submit" class="btn btn-success" value="Cập nhật giỏ hàng"
                                        name="capnhatsoluong">
                                    <?php

									$sql_giohang_select =  "SELECT * FROM tbl_giohang";
									$giohang_select = $con->query($sql_giohang_select)->fetch(PDO::FETCH_ASSOC);


									if (isset($_SESSION['dangnhap_home']) && $count_giohang_select > 0) {
										foreach ($giohang_select as $giohang1) {
									?>

                                    <input type="hidden" name="thanhtoan_product_id[]"
                                        value="<?php echo $giohang1['sanpham_id'] ?>">
                                    <input type="hidden" name="thanhtoan_soluong[]"
                                        value="<?php echo $giohang1['soluong'] ?>">
                                    <?php
										}
										?>
                                    <input type="submit" class="btn btn-primary" value="Thanh toán giỏ hàng"
                                        name="thanhtoandangnhap">

                                    <?php
									}
									?>

                                </td>

                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <?php
		if (!isset($_SESSION['dangnhap_home'])) {
		?>
        <div class="checkout-left">
            <div class="address_form_agile mt-sm-5 mt-4">
                <h4 class="mb-sm-4 mb-3">Thêm địa chỉ giao hàng</h4>
                <form action="" method="post" class="creditly-card-form agileinfo_form">
                    <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="information-wrapper">
                            <div class="first-row">
                                <div class="controls form-group">
                                    <input class="billing-address-name form-control" type="text" name="name"
                                        placeholder="Điền tên" required="">
                                </div>
                                <div class="w3_agileits_card_number_grids">
                                    <div class="w3_agileits_card_number_grid_left form-group">
                                        <div class="controls">
                                            <input type="text" class="form-control" placeholder="Số phone" name="phone"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="w3_agileits_card_number_grid_right form-group">
                                        <div class="controls">
                                            <input type="text" class="form-control" placeholder="Địa chỉ" name="address"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="controls form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                        required="">
                                </div>
                                <div class="controls form-group">
                                    <input type="text" class="form-control" placeholder="Password" name="password"
                                        required="">
                                </div>
                                <div class="controls form-group">
                                    <textarea style="resize: none;" class="form-control" placeholder="Ghi chú"
                                        name="note" required=""></textarea>
                                </div>
                                <div class="controls form-group">
                                    <select class="option-w3ls" name="giaohang">
                                        <option>Chọn hình thức giao hàng</option>
                                        <option value="1">Thanh toán ATM</option>
                                        <option value="0">Nhận tiền tại nhà</option>


                                    </select>
                                </div>
                            </div>
                            <?php
								$sql_lay_giohang = "SELECT * FROM tbl_giohang ORDER BY giohang_id DESC";
								$laygiohang = $con->query($sql_lay_giohang)->fetchAll(PDO::FETCH_ASSOC);

								foreach ($lay_giohang as $row_thanhtoan) {
								?>
                            <input type="hidden" name="thanhtoan_product_id[]"
                                value="<?php echo $row_thanhtoan['sanpham_id'] ?>">
                            <input type="hidden" name="thanhtoan_soluong[]"
                                value="<?php echo $row_thanhtoan['soluong'] ?>">
                            <?php
								}
								?>
                            <input type="submit" name="thanhtoan" class="btn btn-success" style="width: 20%"
                                value="Thanh toán">

                        </div>
                    </div>
                </form>

            </div>
        </div>
        <?php
		}
		?>
    </div>
</div>
<!-- //checkout page -->