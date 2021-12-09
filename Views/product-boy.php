<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồng hồ nam</title>
    <!-- link phông chữ  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/product.css">
    <!-- link của icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- thư viện slick slider  -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- thư viện animation AOS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css">
   <!-- thư viện animation WOW -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   <link rel="stylesheet" href="./CSS/product-boy.css">
</head>
</head>
<body>
    <header>
        <div class="header-1">
            <div class="container">
                <div class="header-1-s">
                    <div class="header-1-item-1">
                        <p class="header-1-item-text-1"><i class="fas fa-map-marker-alt icon"></i> 319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p>
                        <p class="header-1-item-text-1"><i class="fas fa-phone-alt icon"></i> <a href="" class="header-1-item-text-link">076 922 0162</a></p>
                    </div>
                    <div class="header-1-item-1">
                        <p class="header-1-item-text-2"><a href="" class="header-1-item-text-link"><i class="fab fa-facebook-f"></i></a></p>
                        <p class="header-1-item-text-2"><a href="" class="header-1-item-text-link"><i class="fab fa-instagram"></i></a></p>
                        <p class="header-1-item-text-2"><a href="" class="header-1-item-text-link"><i class="fab fa-twitter"></i></a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-2">
            <div class="container">
                <div class="header-2-s">

                    <div class="header-2-logo">
                        <img src="./logo/logo-mona-3.png" alt="">
                    </div>

                    <div class="header-2-search">
                        <input type="text" placeholder="Tìm kiếm">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>


                    <div class="header-2-right">
                        <p class="header-2-right-text"><a href=""><i class="fas fa-heart"></i></a></p>
                        <p class="header-2-right-cart"><span class="header-2-right-number">0</span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- lam phan icon de dropmenu khi responsive -->
        <input type="checkbox" id="toggle-menu">
        <label for="toggle-menu" class="header-icon-responsive">
            <i class="fas fa-bars" id="header-icon1" ></i>
            <i class="fas fa-times" id="header-icon2"></i>
        </label>
        <div class="header-3">
                <div class="header-3-s">
                    <ul class="header-3-list">
                        <li class="header-3-list-item"><a href="./index.php" class="header-3-list-item-link">Trang chủ</a></li>
                        <li class="header-3-list-item"><a href="./introduce.php" class="header-3-list-item-link">Giới thiệu</a></li>
                        <li class="header-3-list-item active"><a href="./product-boy.php" class="header-3-list-item-link">đồng hồ nam</a></li>
                        <li class="header-3-list-item"><a href="./product-girl.php" class="header-3-list-item-link">đồng hồ nữ</a></li>
                        <li class="header-3-list-item"><a href="./news.php" class="header-3-list-item-link">blogs</a></li>
                        <li class="header-3-list-item"><a href="./contact.php" class="header-3-list-item-link">liên hệ</a></li>
                        <li class="header-3-list-item header-3-list-item-mobile">
                            <div class="header-3-list-item-search">
                                <input type="text" name="" id="" class="header-3-list-item-search-input" placeholder="Tìm kiếm">
                                <button class="header-3-list-item-search-btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </header>
<!-- hết phần header  -->

<!-- làm phần main -->
<div class="main">
    <div class="container">
        <div class="main-tittle">
            <div class="main-tittle-left">
                <h3 class="main-tittle-left-text">Trang chủ <span>/</span> <span class="main-tittle-left-text-active">Đồng hồ nam</span></h3>
            </div>
            <div class="main-tittle-right">
                <div class="main-tittle-right-text-responsive">
                    <label for="main-middle-left-toggle" class="main-tittle-right-text-responsive-lable-bar"><i class="fas fa-bars"></i></label>
                    <h2>Lọc</h2>
                </div>
                <h3 class="main-tittle-right-text">Hiên thị một kết quả duy nhất</h3>
                <select name="" id="main-tittle-right-choose">
                    <option value="0">Thứ tự mặc định</option>
                    <option value="0">Thứ tự theo mức độ phổ biến</option>
                    <option value="0">Thứ tự theo điểm đánh giá</option>
                    <option value="0">Mới nhất</option>
                    <option value="0">Thứ tự theo giá: thấp đến cao</option>
                    <option value="0">Thứ tự theo giá: cao đến thấp</option>
                </select>
            </div>
        </div>




        <!-- làm phần main chính -->
        <div class="main-middle">
            <!-- chỗ input phần làm trung gian của main-middle-left -->
            <input type="checkbox" id="main-middle-left-toggle">
            <!-- main-middle-modal là phần để phụ trợ cho main-middle-left khi responsive -->
            <div class="main-middle-modal"></div>
            <!-- phần làm dấu chữ X khi mà main-middle-left hiện ra ở phần responsive -->
            <label for="main-middle-left-toggle" class="main-tittle-right-text-responsive-lable-exit"><i class="fas fa-times"></i></label>
             <!-- hết phần làm dấu chữ X khi mà main-middle-left hiện ra ở phần responsive -->
            <div class="main-middle-left">

                <!-- làm phần main middle left  1 -->
                <div class="main-middle-left-item">
                    <h4 class="main-middle-left-item-tittle">
                        DANH MỤC SẢN PHẨM
                    </h4>

                    <nav class="main-middle-left-item-list">
                        <ul>
                           <li><a href="">Demo</a></li> 
                           <li><a href="">Demo</a></li> 
                           <li class="main-middle-left-item-list-item-active"><a href="">Sản phẩm</a> <span><i class="fas fa-chevron-down"></i></span></li>
                           <div class="main-middle-left-item-list-dropmenu">
                               <ul>
                                   <li><a href="./product-boy.php">Đồng hồ nam</a></li>
                                   <li><a href="./product-girl.php">Đồng hồ nữ</a></li>
                               </ul>
                           </div> 
                        </ul>
                    </nav>
                </div>

<!-- làm phần main middle left  2 -->
                <div class="main-middle-left-item">
                    <h4 class="main-middle-left-item-tittle">
                        SẢN PHẨM
                    </h4>

                    <div class="main-middle-left-item-list">
                    <?php
                    include"./admin/connect.php";
                    $sql="SELECT * FROM `sanpham`";
                    $query=mysqli_query($conn, $sql);
                    $i=0;
                    while($row=mysqli_fetch_array($query))
                    {
                        if($i<6)
                        {
                            $i++;
                    ?>
                        <div class="main-middle-left-item-list-item">
                            <div class="main-middle-left-item-list-item-logo">
                                <a href="./product-information.php?id=<?php echo $row["ID"]?>"><img src="./anhsanpham/<?php echo $row["anhsanpham"]?>" alt=""></a>
                            </div>
                            <div class="main-middle-left-item-list-item-text">
                                <h3 class="main-middle-left-item-list-item-text-tittle">
                                <?php echo $row["tensanpham"]?>
                                </h3>
                                <p class="main-middle-left-item-list-item-text-price">
                                <?php echo number_format($row["gia"])?>
                                </p>
                            </div>
                        </div>
                        <?php }}?>
                      

                    </div>
                </div>
<!-- làm phần main middle left  3 -->
                <div class="main-middle-left-item">
                    <h4 class="main-middle-left-item-tittle">
                        TIN TỨC
                    </h4>

                    <div class="main-middle-left-item-list">
                    <?php
                    include "./admin/connect.php";
                    $sql = "SELECT * FROM `tintuc`";
                    $query = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                        if ($i < 6) {
                            $i++;
                    ?>
                        <div class="main-middle-left-item-list-item">
                            <div class="main-middle-left-item-list-item-logo main-middle-left-item-list-item-logo-new">
                                <a href="./new-information1.php"><img class="main-middle-left-item-list-item-logo-new" src="./anhtintuc/<?php echo $row["anhtintuc"] ?>" alt=""></a>
                            </div>
                            <div class="main-middle-left-item-list-item-text">
                                <h3 class="main-middle-left-item-list-item-text-tittle main-middle-left-item-list-item-text-tittle-new">
                                    <a href="./new-information1.php"><?php echo $row["tentintuc"] ?></a>
                                </h3>
                            </div>
                        </div>
                        <?php }} ?>

                    </div>
                </div>

            </div>

            <div class="main-middle-right">
                <div class="row1">

                    <?php
                    include"./admin/connect.php";
                    $sql="SELECT * FROM `sanpham`";
                    $query=mysqli_query($conn, $sql);
                    $i=0;
                    while($row=mysqli_fetch_array($query))
                    {
                        if($i<30)
                        {
                            $i++;
                    ?>
                    <div class="main-middle-right-item">
                        <div class="main-middle-right-item-img">
                            <a href="./product-information.php?id=<?php echo $row["ID"]?>"><img src="./anhsanpham/<?php echo $row["anhsanpham"]?>" alt=""></a>
                        </div>

                        <div class="main-middle-right-item-text">
                            <h3 class="main-middle-right-item-text-tittle"><?php echo $row["tensanpham"]?></h3>
                            <p class="main-middle-right-item-text-price"><?php echo number_format($row["gia"])?></p>
                            <a href="./testcart.php?id=<?php echo $row["ID"]?>" class="main-middle-right-item-text-btn-buy">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>


        <div class="main-7">
            <form action="">
                <div class="container">
                    <div class="main-7-s">
                           <div class="main-7-tittle">
                               <h2>ĐĂNG KÝ NHẬN THÔNG TIN</h2>
                           </div>
                           <div class="main-7-search">
                               <input type="text" placeholder="Tìm kiếm..." id="main-7-search-input">
                               <button type="submit" id="main-7-search-btn">Đăng ký</button>
                           </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- hết làm phần main -->









<!-- làm phần footer  -->
<footer>
    <div class="container">
        <div class="footer-s">
         <div class="row2">
 
 
             <div class="footer-item footer-item-1">
                 <h2 class="footer-item-tittle">THÔNG TIN LIÊN HỆ</h2>
                 <div class="footer-item-list">
 
 
                     <div class="footer-item-list-item">
                         <div class="footer-item-list-item-icon">
                             <i class="fas fa-map-marker-alt"></i>
                         </div>
                         <div class="footer-item-list-item-text">
                             <p><a href="">319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                         <div class="footer-item-list-item-icon">
                             <i class="fas fa-phone-alt"></i>
                         </div>
                         <div class="footer-item-list-item-text">
                             <p><a href="">076 922 0162</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                         <div class="footer-item-list-item-icon">
                             <i class="fas fa-envelope-open-text"></i>
                         </div>
                         <div class="footer-item-list-item-text">
                             <p><a href="">demonhunterg@gmail.com
                                 mon@mona.media</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                         <div class="footer-item-list-item-icon">
                             <i class="fab fa-skype"></i>
                         </div>
                         <div class="footer-item-list-item-text">
                             <p><a href="">demonhunterp</a></p>
                         </div>
                     </div>
 
 
                 </div>
                 <div class="footer-item-icon">
                     <div class="footer-item-icon-item footer-item-icon-item-face">
                         <a href=""><i class="fab fa-facebook-f"></i></a>
                     </div>
                     <div class="footer-item-icon-item footer-item-icon-item-insta">
                         <a href=""><i class="fab fa-instagram"></i></a>
                     </div>
                     <div class="footer-item-icon-item footer-item-icon-item-twitter">
                         <a href=""><i class="fab fa-twitter"></i></a>
                     </div>
                     <div class="footer-item-icon-item footer-item-icon-item-wifi">
                         <a href=""><i class="fas fa-wifi"></i></a>
                     </div>
                     <div class="footer-item-icon-item footer-item-icon-item-linked">
                         <a href=""><i class="fab fa-linkedin-in"></i></a>
                     </div>
                 </div>
             </div>
 
 
                <div class="footer-item footer-item-1">
                 <h2 class="footer-item-tittle">LIÊN KẾT</h2>
                 <div class="footer-item-list">
 
 
                     <div class="footer-item-list-item">
                        
                         <div class="footer-item-list-item-text">
                             <p><a href="./introduce.php">Giới thiệu</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                        
                         <div class="footer-item-list-item-text ">
                             <p><a href="./product-boy.php" class="footer-active">Đồng hồ nam</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                         
                         <div class="footer-item-list-item-text">
                             <p><a href="./product-girl.php">Đồng hồ nữ</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                        
                         <div class="footer-item-list-item-text">
                             <p><a href="./news.php">Blogs</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                        
                         <div class="footer-item-list-item-text">
                             <p><a href="./contact.php">Liên hệ</a></p>
                         </div>
                     </div>
 
                 </div>
             </div>
 
 
 
             <div class="footer-item footer-item-1">
                 <h2 class="footer-item-tittle">HỖ TRỢ</h2>
                 <div class="footer-item-list">
 
 
                     <div class="footer-item-list-item">
                         
                         <div class="footer-item-list-item-text">
                             <p><a href="./introduce.php">Hướng dẫn mua hàng</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                         
                         <div class="footer-item-list-item-text">
                             <p><a href="./introduce.php">Hướng dẫn thanh toán</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                        
                         <div class="footer-item-list-item-text">
                             <p><a href="./introduce.php">Chính sách bảo hành</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                       
                         <div class="footer-item-list-item-text">
                             <p><a href="./introduce.php">Chính sách đổi trả</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                     
                         <div class="footer-item-list-item-text">
                             <p><a href="./contact.php">Tư vấn khách hàng</a></p>
                         </div>
                     </div>
 
                 </div>
             </div>
 
             <div class="footer-item footer-item-4">
                 <h2 class="footer-item-tittle">TẢI ỨNG DỤNG TRÊN</h2>
                 <div class="footer-item-list">
 
 
                     <div class="footer-item-list-item">
                        
                         <div class="footer-item-list-item-text">
                             <p><a href="">Ứng dụng Mona Watch hiện có sẵn trên Google Play & App Store. Tải nó ngay.</a></p>
                         </div>
                     </div>
 
                     <div class="footer-item-list-item">
                         <img class="footer-item-list-item-img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/img-googleplay.jpg" alt="">
                     </div>
 
                     <div class="footer-item-list-item">
                         <img class="footer-item-list-item-img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/img-appstore.jpg" alt="">
                     </div>
                 </div>
             </div>
         </div>
        </div>
    </div>
    <h3 class="footer-banquyen">@Bản quyền thuộc về lương ngọc vinh</h3>
 </footer>
<!-- hết phần footer -->
 <!-- thư viện js của jquery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- thư viện js của AOS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
<script>
    $(document).ready(function(){
        $(".main-middle-left-item-list-item-active").click(function(){
            $(".main-middle-left-item-list-dropmenu").slideToggle(500);
        });
    });
</script>


</body>
</html>