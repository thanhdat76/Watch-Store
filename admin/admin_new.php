<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_new.css">
    <link rel="stylesheet" href="../css/admin_chung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
<div class="admin">
            <div class="admin_frame">
                <div class="admin_left">
                    <img class="admin_left_logo" src="../logo/logo-mona-2.png" alt="">
                    <div class="admin_left_quanly">
                        <h3>hệ thống admin quản lý</h3>
                        <div class="admin_left_quanly_frame">
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_sanpham.php">Quản lý sản phẩm - Product</a></p>
                            </div>

                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_new.php">Quản lý tin tức sự kiện - News & Sale</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_cart.php">Quản lý đơn hàng - Order</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_lienhe.php">Quản lý phản hồi khách hàng - Contact</a></p>
                            </div>
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_doanhthu.php">Quản lý doanh thu - revenue</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="admin_right">
                <?php
    include "./connect.php";
    $sql = "SELECT * FROM `tintuc`";
    $query = mysqli_query($conn, $sql);
    ?>
        <div class="main_right">
            <h1 class="main_right_tittle">Quản lý tin tức</h1>
            <div class="btn_them"><a href="./admin_add_new.php">Thêm tin tức</a></div>
            <div class="main_right_list">
                <ul>
                    <li class="item_id">ID</li>
                    <li class="item_anh">Ảnh tin tức</li>
                    <li class="item_ten">Tên tin tức</li>
                    <li class="item_mota">Mô tả</li>
                    <li class="item_thoigian">Thời gian đăng</li>
                    <li class="item_chucnang">Chức năng</li>
                </ul>
            </div>
            <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
            <div class="main_righ_list_frame">
                <div class="main_right_list_item">
                    <div class="item_id item_id1 item">
                        <p><?php echo $row["ID"] ?></p>
                    </div>
                    <div class="item_anh item_anh1 item">
                        <img src="../anhtintuc/<?php echo $row["anhtintuc"] ?>" alt="">
                    </div>
                    <div class="item_ten item_ten1 item">
                        <h3><?php echo $row["tentintuc"] ?></h3>
                    </div>
                    <div class="item_mota item_mota1 item">
                        <p><?php echo $row["mota"] ?></p>
                    </div>
                    <div class="item_thoigian item_thoigian1 item">
                        <p><?php echo $row["thoigian"] ?></p>
                    </div>
                    <div class="item_chucnang">
                        <a href="./admin_edit_new.php?id=<?php echo $row["ID"]?>">Sửa</a>
                        <a href="./admin_delete_new.php?id=<?php echo $row["ID"]?>">Xóa</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
                </div>
            </div>
    </div>

    <footer>
        <h1>Hệ thống quản lý cửa hàng bán đồng hồ</h1>
    </footer>

</body>

</html>