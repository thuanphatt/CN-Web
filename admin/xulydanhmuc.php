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
if (isset($_POST['themdanhmuc'])) {
    $tendanhmuc = $_POST['danhmuc'];
    $sql = "INSERT INTO tbl_category(category_name) values ('$tendanhmuc')";
    $sql_insert = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
} elseif (isset($_POST['capnhatdanhmuc'])) {
    $id_post = $_POST['id_danhmuc'];
    $tendanhmuc = $_POST['danhmuc'];
    $sql = "UPDATE tbl_category SET category_name='$tendanhmuc' WHERE category_id='$id_post'";
    $sql_update = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
    header('Location:xulydanhmuc.php');
}
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql = "DELETE FROM tbl_category WHERE category_id='$id'";
    $sql_xoa = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh mục</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <p>Xin chào : <?php echo $_SESSION['dangnhap'] ?> <a href="?login=dangxuat">Đăng xuất</a></p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET['quanly']) == 'capnhat') {
                $id_capnhat = $_GET['id'];
                $sql = "SELECT * FROM tbl_category WHERE category_id='$id_capnhat'";
                $sql_capnhat = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="col-md-4">
                <h4>Cập nhật danh mục</h4>
                <label>Tên danh mục</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="danhmuc"
                        value="<?php echo $sql_capnhat['category_name'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_danhmuc"
                        value="<?php echo $sql_capnhat['category_id'] ?>">

                    <input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-default">
                </form>
            </div>
            <?php
            } else {
            ?>
            <div class="col-md-4">
                <h4>Thêm danh mục</h4>
                <label>Tên danh mục</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục"><br>
                    <input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-default">
                </form>
            </div>
            <?php
            }

            ?>
            <div class="col-md-8">
                <h4>Liệt kê danh mục</h4>
                <?php
                $sql = "SELECT * FROM tbl_category ORDER BY category_id DESC";
                $sql_select = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên danh mục</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($sql_select as $select) {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $select['category_name'] ?></td>
                        <td><a href="?xoa=<?php echo $select['category_id'] ?>">Xóa</a> || <a
                                href="?quanly=capnhat&id=<?php echo $select['category_id'] ?>">Cập nhật</a></td>
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