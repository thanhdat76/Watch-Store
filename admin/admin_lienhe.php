<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_chung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
     <!-- link phông chữ  -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../css/admin_lienhe.css">
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
                    <h1 class="admin_right_tittle">Quản lý phản hồi khách hàng</h1>
                    <div class="admin_right_table">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên khách hàng</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Mô tả</th>
                            </tr>
                        <?php 
                        include"./connect.php";
                        $sql="SELECT * FROM `lienhe`";
                        $query=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_assoc($query))
                        {
                        ?>
                            <tr>
                                <td><?php echo $row["ID"]?></td>
                                <td><?php echo $row["tenkhachhang"]?></td>
                                <td><?php echo $row["sdt"]?></td>
                                <td><?php echo $row["diachi"]?> </td>
                                <td><?php echo $row["email"]?></td>
                                <td><?php echo $row["mota"]?></td>
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
