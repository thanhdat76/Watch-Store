<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_sanpham.css">
    <link rel="stylesheet" href="../css/admin_chung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
     <!-- link phông chữ  -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="admin">
            <div class="admin_frame">
                <div class="admin_left">
                    <img class="admin_left_logo" src="../logo/logo-mona-2.png" alt="">
                    <div class="admin_left_quanly">
                        <h3>Admin</h3>
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
    mysqli_set_charset($conn, 'UTF8');
    $sql="SELECT * FROM `sanpham`";
    $query=mysqli_query($conn, $sql);
    ?>
        <div class="main_right">
            <h1>Quản lý sản phẩm</h1>
            <p class="main_right_add"><a href="./admin_add_sanpham.php">Thêm sản phẩm</a></p>
            <table class="main_right_table">
                <th class="main_right_table_id">ID</th>
                <th class="main_right_table_anh">Ảnh sản phẩm</th>
                <th class="main_right_table_ten">Tên sản phẩm</th>
                <th class="main_right_table_gia">Giá sản phẩm</th>
                <th class="main_right_table_chucnang">Chức năng</th>

                <!-- Khung san phẩm -->
                <?php
                while($row=mysqli_fetch_array($query))
                {                
                ?>
                <tr>
                    <td><?php echo $row["ID"];?></td>
                    <td class="main_right_table_anh_img"><img src="../anhsanpham/<?php echo $row["anhsanpham"];?>" alt=""></td>
                    <td><?php echo $row["tensanpham"];?></td>
                    <td><?php echo number_format($row["gia"]);?>đ</td>
                    <td class="main_right_table_chucnang_delete_edit">
                        <a href="./admin_edit_sanpham.php?id=<?php echo $row["ID"];?>">Sửa</a>
                        <a href="./admin_delete_sanpham.php?id=<?php echo $row["ID"];?>">Xóa</a>
                    </td>
                </tr>
                <?php }?>
                <!-- hết làm phần khung sản phẩm -->
            </table>
        </div>
                </div>
            </div>
    </div>

    <footer>
        <h1>Hệ thống quản lý cửa hàng bán đồng hồ</h1>
    </footer>
</body>
</html>
