<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_chung.css">
    <link rel="stylesheet" href="../css/admin_doanhthu.css">
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
                    <h1 class="admin_right_tittle">Quản lý doanh thu</h1>
                    <div class="admin_right_search">
                        <form action="" method="get">
                            <div class="item1">
                                <input type="text" name="month" placeholder="Nhập tháng cần tìm doanh thu">
                                <input type="text" name="year" placeholder="Nhập năm cần tìm doanh thu">
                            </div>
                            <div class="item2">
                                <button name="search">Tìm kiếm</button>
                            </div>
                        </form> 
                    </div>

                    <?php
                include"./connect.php";
                $sum=0;
                if(isset($_GET["search"]))
                {
                    $month=$_GET["month"];
                    $year=$_GET["year"];
                    if(is_numeric($month)==true && is_numeric($year)==true)
                    {
                        $sql="SELECT * from giohang where YEAR(thoigian)=$year and MONTH(thoigian)=$month";
                        $query=mysqli_query($conn, $sql);
                    }
                    else{
                        echo '<script>alert("Mời bạn nhập số ngày tháng");</script>';
                    }
                }
                else{
                    $sql="SELECT * FROM `giohang`";
                    $query=mysqli_query($conn, $sql);
                }
                ?>
                    <div class="admin_right_table">
                        <h3 class="admin_right_table_tittle">Bảng danh sách mua hàng</h3>
                        <table class="admin_right_table_frame">
                            <tr>
                                <th>ID</th>
                                <th>Họ tên khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Thời gian</th>
                            </tr>
                            <?php  while($row=mysqli_fetch_assoc($query))
                            {
                                if($row["trangthai"]=="Đã thanh toán")
                                {
                                    $sum=$sum+$row["tongtien"];
                                }
                            ?>
                            <tr>
                                <td><?php echo $row["IDgiohang"]?></td>
                                <td><?php echo $row["hotenkhachhang"]?></td>
                                <td><?php echo $row["diachi"]?></td>
                                <td><?php echo $row["sdt"]?></td>
                                <td><?php echo number_format($row["tongtien"])?></td>
                                <?php if($row["trangthai"]=="Đã thanh toán") 
                                {
                                ?>
                                <td class="green1"><?php echo $row["trangthai"]?></td>
                                <?php } else{?>
                                    <td class="red1"><?php echo $row["trangthai"]?></td>
                                    <?php }?>
                                <td><?php echo $row["thoigian"]?></td>
                            </tr>
                            <?php }?>
                        </table>
                        <p class="admin_right_table_consequence">Tổng số tiền: <?php echo number_format($sum)?>đ</p>
                    </div>
                </div>
            </div>
    </div>

    <footer>
        <h1>Hệ thống quản lý cửa hàng bán đồng hồ</h1>
    </footer>
</body>
</html>
