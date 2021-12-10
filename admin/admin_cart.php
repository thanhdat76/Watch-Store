<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_chung.css">
    <link rel="stylesheet" href="../css/admin_cart.css">
</head>
<body>
<div class="admin">
            <div class="admin_frame">
                <div class="admin_left">
                   <!-- <img class="admin_left_logo" src="../logo/logo-mona-2.png" alt=""> -->
                    <div class="admin_left_quanly">
                        <h3>Admin</h3>
                        <div class="admin_left_quanly_frame">
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_sanpham.php">Product</a></p>
                            </div>

                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_client.php">Client</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_cart.php">Order</a></p>
                            </div> 

<!--
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_lienhe.php">Quản lý phản hồi khách hàng - Contact</a></p>
                            </div>-->
							
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_doanhthu.php">Doanh thu</a></p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="admin_right">
                <h2 class="admin_right_tittle">Quản lý giỏ hàng</h2>
                <div class="admin_right_table">
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>Họ tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th>Chức năng</th>
                        </tr>
                        <?php 
            include"./connect.php" ;
            $sql="SELECT * FROM `giohang`";
            $query=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
                        <tr>
                            <td><?php echo $row["IDgiohang"]?></td>
                            <td><?php echo $row["hotenkhachhang"]?></td>
                            <td><?php echo $row["diachi"]?></td>
                            <td><?php echo $row["sdt"]?></td>
                            <td><?php echo number_format($row["tongtien"])?></td>
                            <?php
                            if($row["trangthai"]=="Đã thanh toán")
                            {
                            ?>
                            <td style="color: #65ff04;"><?php echo $row["trangthai"]?></td>
                            <?php } else{?>
                                <td style="color: #ff0202;"><?php echo $row["trangthai"]?></td>
                                <?php }?>
                            <td>2021-05-06</td>
                            <td>
                                <div class="item_chucnang">
                                    <a style="color: #65ff04;" href="./admin_detail_cart.php?id=<?php echo $row["IDgiohang"]?>">Xem chi tiết</a>
                                    <a style="color: #ff0202; margin-left: 15px;" href="./hoanthanh.php?id=<?php echo $row["IDgiohang"]?>">Thanh toán</a>
                                </div>
                            </td>
                        </tr>
        <?php }?>
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