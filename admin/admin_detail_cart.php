<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                    </div>
                </div>
            </div>
            <div class="admin_right">
                <h2 class="admin_right_tittle">Quản lý giỏ hàng</h2>
                <div class="admin_right_table">
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>ID sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        </tr>
                        <?php 
            include"./connect.php" ;
            if(isset($_GET["id"]))
            {
            $id=$_GET["id"];
            $sql="SELECT * FROM `chitietgiohang` where IDgiohang=$id";
            $query=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
                        <tr>
                            <td><?php echo $row["IDgiohang"]?></td>
                            <td><?php echo $row["IDsanpham"]?></td>
                            <td><?php echo $row["tensanpham"]?></td>
                            <td><img src="../anhsanpham/<?php echo $row["anh"] ?>" alt=""></td>
                            <td><?php echo number_format($row["gia"])?></td>
                            <td><?php echo $row["soluong"]?></td>
                            <td><?php echo number_format($row["tongtien"])?></td>
                        </tr>
        <?php }} else{

            echo "lỗi lấy thông tin đơn hàng";
        }?>
                    </table>
                </div>
                <p class="admin_right_back"><a href="./admin_cart.php">Quay lại trang đơn hàng</a></p>
            </div>
        </div>
</div>

<footer>
    <h1>Hệ thống quản lý cửa hàng bán đồng hồ</h1>
</footer>
</body>
</html>
</body>
</html>