<?php
session_start();
include('../db/connect.php');
if (!isset($_SESSION['dangnhap'])) {
    header('Location: index.php');
}
if (isset($_GET['login'])) {
    $dangxuat = $_GET['login'];
} else {
    $dangxuat = '';
}
if ($dangxuat == 'dangxuat') {
    session_destroy();
    header('Location: index.php');
}
?>
<?php
if (isset($_POST['capnhatdonhang'])) {
    $xuly = $_POST['xuly'];
    $mahang = $_POST['mahang_xuly'];
    $sql =  "UPDATE tbl_donhang SET tinhtrang='$xuly' WHERE mahang='$mahang'";
    $sql_update_donhang = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
    $sql_giaodich = "UPDATE tbl_giaodich SET tinhtrangdon='$xuly' WHERE magiaodich='$mahang'";
    $sql_update_giaodich = $con->query($sql_giaodich)->fetch(PDO::FETCH_ASSOC);
}

?>
<?php
if (isset($_GET['xoadonhang'])) {
    $mahang = $_GET['xoadonhang'];
    $sql = "DELETE FROM tbl_donhang WHERE mahang='$mahang'";
    $sql_delete = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
    header('Location:xulydonhang.php');
}
if (isset($_GET['xacnhanhuy']) && isset($_GET['mahang'])) {
    $huydon = $_GET['xacnhanhuy'];
    $magiaodich = $_GET['mahang'];
} else {
    $huydon = '';
    $magiaodich = '';
}
$sql = "UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich'";
$sql_update_donhang =  $con->query($sql)->fetch(PDO::FETCH_ASSOC);
$sql_giaodich = "UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'";
$sql_update_giaodich = $con->query($sql_giaodich)->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đơn hàng</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <p>Xin chào : <?php echo $_SESSION['dangnhap'] ?> <a href="?login=dangxuat">Đăng xuất</a></p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulydanhmuc.php">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulydanhmucbaiviet.php">Danh mục bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulybaiviet.php">Bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
                </li>

            </ul>
        </div>
    </nav><br><br>
    <div class="container-fluid">
        <div class="row">
            <?php
            if (isset($_GET['quanly']) == 'xemdonhang') {
                $mahang = $_GET['mahang'];
                $sql = "SELECT * FROM tbl_donhang,tbl_sanpham WHERE tbl_donhang.sanpham_id=tbl_sanpham.sanpham_id AND tbl_donhang.mahang='$mahang'";
                $sql_chitiet =  $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="col-md-7">
                <p>Xem chi tiết đơn hàng</p>
                <form action="" method="POST">
                    <table class="table table-bordered ">
                        <tr>
                            <th>Thứ tự</th>
                            <th>Mã hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt</th>


                            <!-- <th>Quản lý</th> -->
                        </tr>
                        <?php
                            $i = 0;
                            foreach ($sql_chitiet as $chitiet) {
                                $i++;
                            ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $chitiet['mahang']; ?></td>

                            <td><?php echo $chitiet['sanpham_name']; ?></td>
                            <td><?php echo $chitiet['soluong']; ?></td>
                            <td><?php echo $chitiet['sanpham_giakhuyenmai']; ?></td>
                            <td><?php echo number_format($chitiet['soluong'] * $chitiet['sanpham_giakhuyenmai']) . 'vnđ'; ?>
                            </td>

                            <td><?php echo $chitiet['ngaythang'] ?></td>
                            <input type="hidden" name="mahang_xuly" value="<?php echo $chitiet['mahang'] ?>">

                            <!-- <td><a href="?xoa=<?php echo $chitiet['donhang_id'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $chitiet['mahang'] ?>">Xem đơn hàng</a></td> -->
                        </tr>
                        <?php
                            }
                            ?>
                    </table>

                    <select class="form-control" name="xuly">
                        <option value="1">Đã xử lý | Giao hàng</option>
                        <option value="0">Chưa xử lý</option>
                    </select><br>

                    <input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
                </form>
            </div>
            <?php
            } else {
            ?>

            <div class="col-md-7">
                <p>Đơn hàng</p>
            </div>
            <?php
            }

            ?>
            <div class="col-md-5">
                <h4>Liệt kê đơn hàng</h4>
                <?php
                $sql = "SELECT * FROM tbl_sanpham,tbl_khachhang,tbl_donhang WHERE tbl_donhang.sanpham_id=tbl_sanpham.sanpham_id AND tbl_donhang.khachhang_id=tbl_khachhang.khachhang_id GROUP BY mahang ";
                $sql_select = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Mã hàng</th>
                        <th>Tình trạng đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Ghi chú</th>
                        <th>Hủy đơn</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($sql_select as $select) {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>

                        <td><?php echo $select['mahang']; ?></td>
                        <td><?php
                                if ($select['tinhtrang'] == 0) {
                                    echo 'Chưa xử lý';
                                } else {
                                    echo 'Đã xử lý';
                                }
                                ?></td>
                        <td><?php echo $select['name']; ?></td>

                        <td><?php echo $select['ngaythang'] ?></td>
                        <td><?php echo $select['note'] ?></td>
                        <td><?php if ($select['huydon'] == 0) {
                                } elseif ($select['huydon'] == 1) {
                                    echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang=' . $select['mahang'] . '&xacnhanhuy=2">Xác nhận hủy đơn</a>';
                                } else {
                                    echo 'Đã hủy';
                                }
                                ?></td>

                        <td><a href="?xoadonhang=<?php echo $select['mahang'] ?>">Xóa</a> || <a
                                href="?quanly=xemdonhang&mahang=<?php echo $select['mahang'] ?>">Xem </a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>