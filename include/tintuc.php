<?php
if (isset($_GET['id_tin'])) {
	$id_danhmuc = $_GET['id_tin'];
} else {
	$id_danhmuc = '';
}
?>
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Trang chủ</a>
                    <i>|</i>
                </li>
                <?php
				$sql = "SELECT * FROM tbl_danhmuc_tin WHERE danhmuctin_id='$id_danhmuc'";
				$sql_tendanhmuc = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
				?>
                <li><?php echo $sql_tendanhmuc['tendanhmuc'] ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- about -->
<div class="welcome py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <?php
		$sql =  "SELECT * FROM tbl_danhmuc_tin WHERE danhmuctin_id='$id_danhmuc'";
		$sql_tendanhmuc1 = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
		?>
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <?php echo $sql_tendanhmuc1['tendanhmuc'] ?></h3>
        <!-- //tittle heading -->
        <?php
		$sql = "SELECT * FROM tbl_danhmuc_tin,tbl_baiviet WHERE tbl_danhmuc_tin.danhmuctin_id = tbl_baiviet.danhmuctin_id AND tbl_danhmuc_tin.danhmuctin_id='$id_danhmuc'";
		$sql_baiviet = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		foreach ($sql_baiviet as $baiviet) {
		?>
        <div class="row">
            <div class="col-lg-4 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
                <img src="images/<?php echo $baiviet['baiviet_image'] ?>" class="img-fluid" alt=" ">
            </div>
            <div class="col-lg-8 welcome-left">
                <h5><a
                        href="index.php?quanly=chitiettin&id_tin=<?php echo $baiviet['baiviet_id'] ?>"><?php echo $baiviet['tenbaiviet'] ?></a>
                </h5>
                <h4 class="my-sm-3 my-2"><?php echo $baiviet['tomtat'] ?></h4>
            </div>
        </div><br>
        <?php
		}
		?>


    </div>
</div>
<!-- //about -->