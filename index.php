<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./CSS/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!-- thư viện slick slider  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
  </head>
  <body>
    <header>
      <div class="header-1">
        <div class="container">
          <div class="header-1-s">
            <div class="header-1-item-1">
              <p class="header-1-item-text-1">
                <i class="fas fa-map-marker-alt icon"></i> 319 - C16 Lý Thường
                Kiệt, P.15, Q.11, Tp.HCM
              </p>
              <p class="header-1-item-text-1">
                <i class="fas fa-phone-alt icon"></i>
                <a href="" class="header-1-item-text-link">076 922 0162</a>
              </p>
            </div>
            <div class="header-1-item-1">
              <p class="header-1-item-text-2">
                <a href="" class="header-1-item-text-link"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </p>
              <p class="header-1-item-text-2">
                <a href="" class="header-1-item-text-link"
                  ><i class="fab fa-instagram"></i
                ></a>
              </p>
              <p class="header-1-item-text-2">
                <a href="" class="header-1-item-text-link"
                  ><i class="fab fa-twitter"></i
                ></a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="header-2">
        <div class="container">
          <div class="header-2-s">
            <div class="header-2-logo">
              <img src="./logo/logo-mona-3.png" alt="" />
            </div>

            <div class="header-2-search">
              <input type="text" placeholder="Tìm kiếm" />
              <button type="submit"><i class="fas fa-search"></i></button>
            </div>

            <div class="header-2-right">
              <p class="header-2-right-text">
                <a href=""><i class="fas fa-heart"></i></a>
              </p>
              <a href="./cart.php" class="header-2-right-cart">
                <span class="header-2-right-number">0</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- lam phan icon de dropmenu khi responsive -->
      <input type="checkbox" id="toggle-menu" />
      <label for="toggle-menu" class="header-icon-responsive">
        <i class="fas fa-bars" id="header-icon1"></i>
        <i class="fas fa-times" id="header-icon2"></i>
      </label>
      <div class="header-3">
        <div class="header-3-s">
          <ul class="header-3-list">
            <li class="header-3-list-item active">
              <a href="./index.php" class="header-3-list-item-link"
                >Trang chủ</a
              >
            </li>
            <li class="header-3-list-item">
              <a href="./introduce.php" class="header-3-list-item-link"
                >Giới thiệu</a
              >
            </li>
            <li class="header-3-list-item">
              <a href="./product-boy.php" class="header-3-list-item-link"
                >đồng hồ nam</a
              >
            </li>
            <li class="header-3-list-item">
              <a href="./product-girl.php" class="header-3-list-item-link"
                >đồng hồ nữ</a
              >
            </li>
            <li class="header-3-list-item">
              <a href="./news.php" class="header-3-list-item-link">blogs</a>
            </li>
            <li class="header-3-list-item">
              <a href="./contact.php" class="header-3-list-item-link"
                >liên hệ</a
              >
            </li>
            <li class="header-3-list-item">
              <a href="./login.php" class="header-3-list-item-link"
                >Đăng nhập</a
              >
            </li>
            <li class="header-3-list-item header-3-list-item-mobile">
              <div class="header-3-list-item-search">
                <input
                  type="text"
                  name=""
                  id=""
                  class="header-3-list-item-search-input"
                  placeholder="Tìm kiếm"
                />
                <button class="header-3-list-item-search-btn" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- hết phần header  -->

    <!-- sang làm phần main -->
    <div class="main" style="overflow-x: hidden">
      <div class="main-banner animate__animated animate__zoomIn animate__slow">
        <div class="main-header-slider single-item">
          <div class="main-banner-item">
            <img src="./banner/banner-watch-seri4.png" alt="" />
            <div class="container">
              <div class="main-banner-item-text">
                <h4 class="main-banner-item-text-tittle">Smart wat</h4>
                <h1 class="main-banner-item-text-tittle1">đồng hồ smart watch thông minh</h1>
                <p class="main-banner-item-text-info">
                  Cùng với sự phát triển không ngừng của thời trang thế giới,
                  rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính
                  hãng đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…
                </p>
                <a href="" class="main-banner-item-text-btn"
                  ><p>xem sản phẩm</p></a
                >
              </div>
            </div>
          </div>

          <div class="main-banner-item">
            <img src="./banner/banner7.png" alt="" />
            <div class="container">
              <div class="main-banner-item-text">
                <h4 class="main-banner-item-text-tittle">Smart wat</h4>
                <h1 class="main-banner-item-text-tittle1">Phong cách đồng hồ thông minh</h1>
                <p class="main-banner-item-text-info">
                  Cùng với sự phát triển không ngừng của thời trang thế giới,
                  rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính
                  hãng đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…
                </p>
                <a href="" class="main-banner-item-text-btn"
                  ><p>xem sản phẩm</p></a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- làm phần mũi tên chuyển slide  -->
        <div class="main-banner-arrow main-banner-arrow-left">
          <p><i class="fas fa-arrow-left"></i></p>
        </div>
        <div class="main-banner-arrow main-banner-arrow-right">
          <p><i class="fas fa-arrow-right"></i></p>
        </div>
      </div>

      <!-- sang phần tiếp theo sau banner  -->
      <div class="main-2">
        <div class="container">
          <div class="main-2-s">
            <div
              class="
                main-2-item
                animate__animated animate__backInDown animate__slow
              "
            >
              <div class="main-2-item-img">
                <a href=""
                  ><img
                    class="main-2-item-img-image"
                    src="./banner/banner5.png"
                    alt=""
                /></a>
              </div>
              <div class="main-2-item-text">
                <h3>Xu hướng 2019</h3>
                <h1>Đồng hồ nam</h1>
              </div>
            </div>

            <div
              class="
                main-2-item
                animate__animated animate__backInDown animate__slow
              "
            >
              <div class="main-2-item-img">
                <a href=""
                  ><img
                    class="main-2-item-img-image"
                    src="./banner/concept-apple-watch-series-6-banner.png"
                    alt=""
                /></a>
              </div>
              <div class="main-2-item-text">
                <h3>Xu hướng 2019</h3>
                <h1>Đồng hồ nữ</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- làm phần main show sản phẩm -->
      <div class="main-3" data-aos="fade-right" style="overflow-x: hidden">
        <div class="container">
          <div class="main-3-tittle">
            <h2>Sản phẩm bán chạy</h2>
            <div class="main-3-tittle-arrow">
              <div class="main-3-tittle-arrow-left main-3-tittle-arrow-size">
                <i class="fas fa-chevron-left"></i>
              </div>
              <div class="main-3-tittle-arrow-right main-3-tittle-arrow-size">
                <i class="fas fa-chevron-right"></i>
              </div>
            </div>
          </div>
          <div class="main-3-s row responsive">
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
            <div class="main-3-item">
              <div class="main-3-item-img">
                <a href="./product-information.php?id=<?php  echo $row["ID"]?>"
                  ><img src="./anhsanpham/<?php echo $row["anhsanpham"]?>" alt=""
                /></a>
              </div>
              <div class="main-3-item-text">
                <h3 class="main-3-item-text-name"><?php echo $row["tensanpham"]?></h3>
                <p class="main-3-item-text-price">
                 <?php echo number_format($row["gia"])?>đ
                </p>
                <a href="./testcart.php?id=<?php echo $row["ID"]?>" class="main-3-item-text-btn">Thêm vào giỏ</a>
              </div>
              <div class="love-card">
                <p><i class="fas fa-heart"></i></p>
              </div>
            </div>
            <?php }}?>



            
          </div>
        </div>
      </div>

      <div class="main-4" data-aos="fade-left" style="overflow-x: hidden">
        <div class="container">
          <div class="main-4-s">
            <div class="row1">
              <div class="main-4-item">
                <a href=""
                  ><img class="main-4-item-image" src="./banner/apple-watch-series-7-4.png" alt=""
                /></a>
                <div class="main-4-text">
                  <h2>cổ điển</h2>
                  <p>Đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
                </div>
              </div>

              <div class="main-4-item">
                <a href=""
                  ><img class="main-4-item-image" src="./anh/anh7.jpg" alt=""
                /></a>
                <div class="main-4-text main-4-text-1">
                  <h2>SMART WATCH</h2>
                  <p>Đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- làm phần main-5 -->
      <div class="main-5">
        <div class="container">
          <div class="main-5-s">
            <div
              class="main-5-tittle"
              data-aos="fade-left"
              style="overflow-x: hidden"
            >
              <ul class="main-5-tittle-list">
                <li
                  class="main-5-tittle-list-item main-5-tittle-list-item-active"
                >
                  <a href="">Sản phẩm phổ biến</a>
                </li>
                <li class="main-5-tittle-list-item">
                  <a href="">Sản phẩm khuyến mãi</a>
                </li>
                <li class="main-5-tittle-list-item">
                  <a href="">Sản phẩm mới</a>
                </li>
              </ul>
            </div>
            <div class="row1" data-aos="fade-right" style="overflow-x: hidden">

            <?php
                    include"./admin/connect.php";
                    $sql="SELECT * FROM `sanpham`";
                    $query=mysqli_query($conn, $sql);
                    $i=0;
                    while($row=mysqli_fetch_array($query))
                    {
                        if($i<15)
                        {
                            $i++;
                    ?>
              <div class="main-5-item">
                <a href="./product-information.php?id=<?php  echo $row["ID"]?>"
                  ><img
                    class="main-5-item-image"
                    src="./anhsanpham/<?php echo $row["anhsanpham"]?>"
                    alt=""
                /></a>
                <div class="main-3-item-text">
                  <h3 class="main-3-item-text-name"><?php echo $row["tensanpham"]?></h3>
                  <p class="main-3-item-text-price">
                  <?php echo number_format($row["gia"])?>đ
                  </p>
                  <a href="./testcart.php?id=<?php echo $row["ID"]?>" class="main-3-item-text-btn">Thêm vào giỏ</a>
                </div>
                <div class="love-card">
                  <p><i class="fas fa-heart"></i></p>
                </div>
              </div>
              <?php }}?>
            </div>
          </div>
        </div>
      </div>

      <!-- làm phần main-6 -->
      <div class="main-6" data-aos="fade-down">
        <div class="container">
          <div class="main-6-s">
            <div class="row1">
            <?php
                    include "./admin/connect.php";
                    $sql = "SELECT * FROM `tintuc`";
                    $query = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                        if ($i < 3) {
                            $i++;
                    ?>
              <div class="main-6-item">
                <div class="main-6-item-image">
                  <a href="./new-information1.php"
                    ><img src="./anhtintuc/<?php echo $row["anhtintuc"] ?>" alt=""
                  /></a>
                </div>
                <div class="main-6-item-text">
                  <h5 class="main-6-item-text-tittle">
                    <a href="./new-information1.php">
                    <?php echo $row["tentintuc"] ?>...</a
                    >
                  </h5>
                  <p class="main-6-item-text-info">
                  <?php echo $row["mota"] ?>...
                  </p>
                </div>
              </div>
              <?php }
                    } ?>
            </div>
          </div>
        </div>
      </div>
      <!-- làm phần main-7 -->
      <div class="main-7" data-aos="fade-left" style="overflow-x: hidden">
        <div class="container">
          <div class="main-7-s">
            <div class="main-7-tittle">
              <h2>ĐĂNG KÝ NHẬN THÔNG TIN</h2>
            </div>
            <div class="main-7-search">
              <input
                type="text"
                placeholder="Tìm kiếm..."
                id="main-7-search-input"
              />
              <button type="submit" id="main-7-search-btn">Đăng ký</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hết phần làm main -->
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
                    <p>
                      <a href=""
                        >319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</a
                      >
                    </p>
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
                    <p><a href="">demonhunterg@gmail.com mon@mona.media</a></p>
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
                <div
                  class="footer-item-icon-item footer-item-icon-item-twitter"
                >
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
                  <div class="footer-item-list-item-text">
                    <p><a href="./product-boy.php">Đồng hồ nam</a></p>
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
                    <p>
                      <a href=""
                        >Ứng dụng Mona Watch hiện có sẵn trên Google Play & App
                        Store. Tải nó ngay.</a
                      >
                    </p>
                  </div>
                </div>

                <div class="footer-item-list-item">
                  <img
                    class="footer-item-list-item-img"
                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/img-googleplay.jpg"
                    alt=""
                  />
                </div>

                <div class="footer-item-list-item">
                  <img
                    class="footer-item-list-item-img"
                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/img-appstore.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="footer-banquyen">Lương Ngọc Vinh</h3>
    </footer>
    <!-- thư viện js của jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- thư viện js của AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
    <script>
      AOS.init({
        offset: 120,
        duration: 500,
      });
    </script>
    <!-- thư viện js của slick slider -->
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script>
      $(document).ready(function () {
        $(".single-item").slick({
          autoplay: true,
          autoplaySpeed: 2000,
          prevArrow: ".main-banner-arrow-left",
          nextArrow: ".main-banner-arrow-right",
        });

        $(".responsive").slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          prevArrow: ".main-3-tittle-arrow-left",
          nextArrow: ".main-3-tittle-arrow-right",
          autoplay: true,
          autoplaySpeed: 1500,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false,
              },
            },
            {
              breakpoint: 680,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              },
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        });
      });
    </script>
  </body>
</html>
