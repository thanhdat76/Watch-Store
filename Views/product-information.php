<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
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
    
    <link rel="stylesheet" href="../css/product-information.css">

</head>
<body>
    <!-- Header -->
    <?php
      include('Shared/header.php');
    ?>
    <!-- hết phần header  -->

    <!-- làm phần main  -->

    <div class="main">
    <?php
        include"../admin/connect.php";
        if(isset($_GET["id"]))
        {
            $id=$_GET["id"];
            $sql="SELECT * FROM `sanpham` WHERE ID=$id";
            $query=mysqli_query($conn, $sql);
            $row=mysqli_fetch_assoc($query);
        }
    ?>
    <div class="container">
        <!-- làm phần main thứ nhất  -->
        <div class="main-1">
            <div class="main-1-left">
                <div class="main-1-left-img">
                    <img src="../Assets/anhsanpham/<?php echo $row["anhsanpham"]?>" alt="">

                    <h3 class="main-1-left-img-sale">-29%</h3>
                    <p class="main-1-left-img-heart"><i class="fas fa-heart"></i></p>
                </div>

                <div class="main-1-left-choose">
                  <div class="main-1-left-choose-item">
                      <img class="main-1-left-choose-item-img" src="../Assets/anhsanpham/<?php echo $row["anh1"]?>" alt="">
                  </div>

                  <div class="main-1-left-choose-item">
                    <img class="main-1-left-choose-item-img" src="../Assets/anhsanpham/<?php echo $row["anh2"]?>" alt="">
                </div>


                <div class="main-1-left-choose-item">
                    <img class="main-1-left-choose-item-img" src="../Assets/anhsanpham/<?php echo $row["anh3"]?>" alt="">
                </div>

                <div class="main-1-left-choose-item">
                    <img class="main-1-left-choose-item-img" src="../Assets/anhsanpham/<?php echo $row["anh4"]?>" alt="">
                </div>
                </div>

            </div>

            <div class="main-1-right">
                <p class="main-1-right-tittle"><a href="">Trang chủ</a>  / <a href="">BEST SELLER</a></p>
                <h1 class="main-1-right-name"><?php echo $row["tensanpham"]?></h1>
                <div class="main-1-right-price">
                    <p class="main-1-right-price-text"><?php echo number_format($row["gia"])?></p>
                </div>

                <div class="main-1-right-introduce">
                    <p><?php echo $row["mota"]?></p>
                </div>

                <ul class="main-1-right-ingredient">
                    <li><p>Sku: <span>P006</span></p></li>
                    <li><p>Categories: <span>Butter & Eggs, Cultured Butter</span></p></li>
                    <li><p>Tag: <span>Man</span></p></li>
                </ul>


                <div class="main-1-right-number-buy">
                    <div class="main-1-right-number">
                        <button class="main-1-right-number-minus"><i class="fas fa-minus"></i></button>
                        <p class="main-1-right-number-text">1</p>
                        <button class="main-1-right-number-plus"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="main-1-right-buy">
                        <a href="./testcart.php?id=<?php echo $row["ID"]?>" class="main-1-right-buy-btn">Thêm vào giỏ</a>
                    </div>
                </div>


                <div class="main-1-right-tittle-choose-pay">
                    <h3 class="main-1-right-tittle-choose-pay-item">Tính phí tự động</h3>
                    <h3 class="main-1-right-tittle-choose-pay-item">Thanh toán</h3>
                </div>

                <div class="main-1-right-type-pay">
                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/Agribank-logo.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/CBbank-logo.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-BIDV.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-MB-new2020.gif" alt=""></a>
                    </div>


                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-Sacombank.png" alt=""></a>
                    </div>


                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-Techcombank.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-Vietcombank.png" alt=""></a>
                    </div>


                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-Vietinbank.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/logo-ngan-hang-VPbank.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/Oceanbank-logo.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/TPbank-logo.png" alt=""></a>
                    </div>

                    <div class="main-1-right-type-pay-item">
                        <a href=""><img src="../Assets/banking/VIB-bank-logo.png" alt=""></a>
                    </div>
                </div>


                <div class="main-1-right-tittle-last">
                    <p>"Hãy trở thành Affilicate của chúng tôi để tìm thêm thu nhập thụ động, kiếm tiền online"</p>
                </div>


                <div class="main-1-right-btn-dangky">
                    <p><a href="">Đăng ký</a></p>
                </div>


                <div class="main-1-right-list-last">
                    <ul class="main-1-right-list-last-s">
                        <li class="main-1-right-list-last-item"><a href="">Thêm yêu thích</a></li>
                        <li class="main-1-right-list-last-item"><span>Mã: P006-1-1-1-1</span></li>
                        <li class="main-1-right-list-last-item"> <span>Danh mục:</span><a href="">Thêm yêu thích</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- hết phần main-1 -->



        <!-- sang làm phần main thứ 2 -->
        <!-- <div class="main-2">
            <div class="main-2-tittle">
                <h3 class="main-2-tittle-item main-2-tittle-item-split main-2-tittle-item-mota">Mô tả</h3>
                <h3 class="main-2-tittle-item main-2-tittle-item-danhgia">Đánh giá (<span class="main-2-tittle-item-number">0</span>)</h3>
            </div>
            <div class="main-2-frame main-2-frame-mota">
                <p class="main-2-mota-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                </p>
                <p class="main-2-mota-text">
                    Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                </p>
            </div>

            <div class="main-2-frame main-2-frame-danhgia">
                <div class="main-2-frame-danhgia-text">
                    <h3 class="main-2-frame-danhgia-text-tittle">
                        Đánh giá
                    </h3>
                    <p class="main-2-frame-danhgia-text-text">
                        Chưa có đánh giá nào. 
                    </p>
                </div>
                <!-- làm phần mục đánh giá để điền  -->
                <!-- <div class="main-2-frame-danhgia-frame">
                    <h3 class="main-2-frame-danhgia-tittle">
                        Hãy là người đầu tiên nhận xét “Classico 4” 
                    </h3>
                    <div class="main-2-frame-danhgia-star">
                        <h4 class="main-2-frame-danhgia-star-tittle">
                            Đánh giá của bạn
                        </h4>

                        <div class="main-2-frame-danhgia-star-choose">
                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                            </div>

                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>

                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>


                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>


                            <div class="main-2-frame-danhgia-star-choose-item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>

                        </div>
                    </div>


                    <div class="main-2-frame-danhgia-input-text">
                        <h4 class="main-2-frame-danhgia-star-tittle">
                            Nhận xét của bạn *
                        </h4>

                        <textarea name="" placeholder="Nhập lời nhận xét"></textarea>
                    </div>



                    <div class="main-2-frame-danhgia-information">
                        <div class="main-2-frame-danhgia-information-item">
                            <h3 class="main-2-frame-danhgia-information-item-tittle">
                                Tên *
                            </h3>
                            <input type="text" placeholder="Nhập tên của bạn">
                        </div>


                        <div class="main-2-frame-danhgia-information-item">
                            <h3 class="main-2-frame-danhgia-information-item-tittle">
                                Email *
                            </h3>
                            <input type="text" placeholder="Nhập gmail của bạn">
                        </div>
                    </div>


                    <input type="submit" class="main-2-frame-danhgia-btn-submit" value="Gửi đi">
                </div> -->
                <!-- hết làm phần mục đánh giá để điền   -->
            </div>
        </div> -->
        <!-- hết làm phần main thứ 2 -->
        <!-- sang làm phần main thứ 3 -->
        <!-- <div class="main-3">
            <h1 class="main-3-tittle">
                Sản phẩm tương tự
            </h1>
            <div class="main-3-s">
                <div class="main-3-item">
                    <div class="main-3-item-image">
                        <a href=""><img class="main-3-item-image-1" src="../Assets/sanpham-men/sp11.png" alt=""></a>
                        <div class="main-3-item-image-overlay">
                            <a href=""><img class="main-3-item-image-overlay-2" src="../Assets/sanpham-men/sp10.png" alt=""></a>
                        </div>
                        <div class="main-3-item-image-heart">
                            <a href=""><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="main-3-item-text">
                        <h3 class="main-3-item-tittle">Classico 3</h3>
                        <p class="main-3-item-price">700.000đ</p>
                        <p class="main-3-item-btn"><a href="">Thêm vào giỏ</a></p>
                    </div>
                </div>
            
            
                <div class="main-3-item">
                    <div class="main-3-item-image">
                        <a href=""><img class="main-3-item-image-1" src="../Assets/sanpham-men/sp12.png" alt=""></a>
                        <div class="main-3-item-image-overlay">
                            <a href=""><img class="main-3-item-image-overlay-2" src="../Assets/sanpham-men/sp13.png" alt=""></a>
                        </div>
                        <div class="main-3-item-image-heart">
                            <a href=""><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="main-3-item-text">
                        <h3 class="main-3-item-tittle">Classico 3</h3>
                        <p class="main-3-item-price">700.000đ</p>
                        <p class="main-3-item-btn"><a href="">Thêm vào giỏ</a></p>
                    </div>
                </div>
            
            
            
                <div class="main-3-item">
                    <div class="main-3-item-image">
                        <a href=""><img class="main-3-item-image-1" src="../Assets/sanpham-men/sp14.png" alt=""></a>
                        <div class="main-3-item-image-overlay">
                            <a href=""><img class="main-3-item-image-overlay-2" src="../Assets/sanpham-men/sp15.png" alt=""></a>
                        </div>
                        <div class="main-3-item-image-heart">
                            <a href=""><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="main-3-item-text">
                        <h3 class="main-3-item-tittle">Classico 3</h3>
                        <p class="main-3-item-price">700.000đ</p>
                        <p class="main-3-item-btn"><a href="">Thêm vào giỏ</a></p>
                    </div>
                </div>
            
            
            
                <div class="main-3-item">
                    <div class="main-3-item-image">
                        <a href=""><img class="main-3-item-image-1" src="../Assets/sanpham-men/sp16.png" alt=""></a>
                        <div class="main-3-item-image-overlay">
                            <a href=""><img class="main-3-item-image-overlay-2" src="../Assets/sanpham-men/sp17.png" alt=""></a>
                        </div>
                        <div class="main-3-item-image-heart">
                            <a href=""><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="main-3-item-text">
                        <h3 class="main-3-item-tittle">Classico 3</h3>
                        <p class="main-3-item-price">700.000đ</p>
                        <p class="main-3-item-btn"><a href="">Thêm vào giỏ</a></p>
                    </div>
                </div>
            
            
            
                <div class="main-3-item">
                    <div class="main-3-item-image">
                        <a href=""><img class="main-3-item-image-1" src="../Assets/sanpham-men/sp18.png" alt=""></a>
                        <div class="main-3-item-image-overlay">
                            <a href=""><img class="main-3-item-image-overlay-2" src="../Assets/sanpham-men/sp19.png" alt=""></a>
                        </div>
                        <div class="main-3-item-image-heart">
                            <a href=""><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="main-3-item-text">
                        <h3 class="main-3-item-tittle">Classico 3</h3>
                        <p class="main-3-item-price">700.000đ</p>
                        <p class="main-3-item-btn"><a href="">Thêm vào giỏ</a></p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- hết phần main thứ 3  -->
    </div>
    </div>
    <!-- hết làm phần main -->


    <!-- Footer -->
        <?php
        include('Shared/footer.php');
        ?>
    <!-- Footer end -->

    <!-- thư viện js của jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- thư viện js của AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
    <script>

        // làm phần chuyển sản phẩm khi chọn ảnh 
        $(document).ready(function(){
            $(".main-1-left-choose-item-img").click(function(){
                $(".main-1-left-img img").attr("src", $(this).attr("src"));
            });


            // làm phần hiển thị đánh giá và mô tả 
            $(".main-2-tittle-item-mota").click(function(){
                $(".main-2-frame-danhgia").hide(1000);
                $(".main-2-frame-mota").show(1000);
            });
            $(".main-2-tittle-item-danhgia").click(function(){
                $(".main-2-frame-mota").hide(1000);
                $(".main-2-frame-danhgia").show(1000);
            });
        });
    </script>
</body>
</html>