<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
     <!-- thư viện slick slider  -->
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <!-- thư viện animation AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css">
    <!-- thư viện animation WOW -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!-- link của icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../css/cart.css">
</head>
<body>
    <!-- Header -->
    <?php
      include('Shared/header.php');
    ?>
    <!-- Header  -->

    <!-- làm phần main -->
    <div class="main">
    <div class="main-1">
        <div class="container">
            <div class="main-1-frame">
                <div class="main-1-left">
                    <div class="main-1-left-tittle">
                        <ul>
                            <li class="main-1-left-tittle-sanpham">Sản phẩm</li>
                            <li class="main-1-left-tittle-gia">Giá</li>
                            <li class="main-1-left-tittle-soluong">số lượng</li>
                            <li class="main-1-left-tittle-tong">tổng</li>
                        </ul>
                    </div>
                    <div class="main-1-left-cart">
                    <?php
                    $tongtien=0;
                    $thanhtoan=0;
                    if(isset($_SESSION["cart"]))
                    {
                        foreach($_SESSION["cart"] as $cart_item)
                        { 
                            $tongtien=$cart_item["gia"]*$cart_item["soluong"];
                            $thanhtoan=$thanhtoan+$tongtien;
                        ?>
                        <div class="main-1-left-cart-item">
                            <p class="main-1-left-cart-item-delete"><a href="./testcart.php?xoa=<?php echo $cart_item["id"]?>"><i class="far fa-times-circle"></i></a></p>
                            <div class="main-1-left-cart-item-img">
                                <img src="../Assets/anhsanpham/<?php echo $cart_item["anh"]?>" alt="">
                            </div>
                            <p class="main-1-left-cart-item-name"><?php echo $cart_item["ten"]?></p>
                            <p class="main-1-left-cart-item-price"><?php echo number_format($cart_item["gia"])?></p>
                            <div class="main-1-left-cart-item-quantity">
                                <p class="main-1-left-cart-item-quantity-btn"><a href="./testcart.php?themsoluong=<?php echo $cart_item["id"]?>">+</a></p>
                                <p><?php echo $cart_item["soluong"]?></p>
                                <p class="main-1-left-cart-item-quantity-btn"><a href="./testcart.php?giamsoluong=<?php echo $cart_item["id"]?>">-</a></p>
                            </div>
                            <p class="main-1-left-cart-item-total-money"><?php echo number_format($tongtien)?></p>
                        </div>
                        <?php }?>
                        <?php } else{?>
                        <p style="text-align: center; font-size: 1.5rem; padding: 12px 0px; ">Giỏ hàng trống</p>
                        <?php }?>
                    </div>
                    <form action="" enctype="multipart/form-data" method="POST" >
                    <div class="main-1-left-form">
                            <div class="main-1left-form-item">
                                <p>Họ và tên</p>
                                <input type="text" name="hoten" placeholder="Nhập họ tên người mua hàng">
                            </div>
                            <div class="main-1left-form-item">
                                <p>Địa chi nhận hàng</p>
                                <input type="text" name="diachi" placeholder="Nhập địa chỉ nhận hàng">
                            </div>
                            <div class="main-1left-form-item">
                                <p>Số điện thoại</p>
                                <input type="text" name="sdt" placeholder="Nhập số điện thoại">
                            </div>
                    </div>
                    <div class="main-1-left-all-btn">
                        <p><a href="./index.php"><i class="fas fa-long-arrow-alt-left"></i> Tiếp tục xem sản phẩm</a></p>
                        <button type="submit" name="capnhap">Cập nhập giỏ hàng</button>
                    </div>
                    </form>
                </div>
                <!-- làm phần bên phải main-1-right -->
                <div class="main-1-right">
                    <h3 class="main-1-right-tittle">Tổng số lượng</h3>
                    <div class="main-1-right-price-total-phu">
                        <p>Tổng phụ</p>
                        <p><?php echo number_format($thanhtoan)?>đ</p>
                    </div>
                    <div class="main-1-right-price-information">
                        <p>Giao hàng</p>
                        <div class="main-1-right-price-information-text">
                            <?php
                            if(isset($_POST["capnhap"]))
                            {
                                $tenkhachhang=$_POST["hoten"];
                                $diachi=$_POST["diachi"];
                                $sdt=$_POST["sdt"];
                                echo "<p>Giao hàng miễn phí</p>";
                                echo "<p>$tenkhachhang</p>";
                                echo "<p>$diachi</p>";
                                echo "<p>$sdt</p>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="main-1-right-price-thanhtoan">
                        <p>Tổng</p>
                        <p><?php echo number_format($thanhtoan)?>đ</p>
                    </div>
                    <div class="main-1-right-btn-thanhtoan">
                    <?php if(isset($tenkhachhang)&&isset($diachi)&& isset($sdt) && isset($_SESSION["cart"])) {if(strlen($tenkhachhang)!=0 && strlen($diachi)!=0 && strlen($sdt)!=0){?>
                        <a href="./testcart.php?thanhtoan&tenkhachhang=<?php echo $tenkhachhang?>&diachi=<?php echo $diachi?>&sdt=<?php echo $sdt?>">Tiến hành thanh toán</a>
                        <?php } else{?>
                            <p>Mời nhập đầy đủ thông tin người nhận</p>
                            <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hết làm phần main  -->

    <!-- Footer -->
    <?php
      include('Shared/footer.php');
    ?>
    <!-- Footer -->

<!-- thư viện js của jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- thư viện js của AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
</body>
</html>