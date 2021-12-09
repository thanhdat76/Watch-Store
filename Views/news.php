<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- thư viện slick slider  -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- thư viện animation AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css">
    <!-- thư viện animation WOW -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link của icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/news.css">
</head>

<body>
    
    <!-- Header -->
    <?php
      include('Shared/header.php');
    ?>
    <!-- Header -->

    <!-- làm phần main -->
    <div class="main">
        <div class="container">
            <div class="main-s">

                <!-- làm phần main left -->
                <div class="main-left">
                    <div class="main-left-search">
                        <form action="">
                            <div class="main-left-search-frame">
                                <input type="text" placeholder="Tìm kiếm...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="main-left-list">
                        <h2 class="main-left-list-tittle">Bài viết mới</h2>
                        <div class="main-left-list-frame">

                            <div class="main-left-list-frame-item">
                                <div class="main-left-list-frame-item-img"><a href="./new-information1.php"><img src="../Assets/new/new-5.jpg" alt=""></a></div>
                                <div class="main-left-list-frame-item-text">
                                    <p><a href="./new-information1.php">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a></p>
                                </div>
                            </div>


                            <div class="main-left-list-frame-item">
                                <div class="main-left-list-frame-item-img"><a href="./new-information2.php"><img src="../Assets/new/new-4.jpg" alt=""></a></div>
                                <div class="main-left-list-frame-item-text">
                                    <p><a href="./new-information2.php">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</a></p>
                                </div>
                            </div>


                            <div class="main-left-list-frame-item">
                                <div class="main-left-list-frame-item-img"><a href="./new-information3.php"><img src="../Assets/new/new-3.jpg" alt=""></a></div>
                                <div class="main-left-list-frame-item-text">
                                    <p><a href="./new-information3.php">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3</a></p>
                                </div>
                            </div>


                            <div class="main-left-list-frame-item">
                                <div class="main-left-list-frame-item-img"><a href="./new-information4.php"><img src="../Assets/new/new-2.jpg" alt=""></a></div>
                                <div class="main-left-list-frame-item-text">
                                    <p><a href="./new-information4.php">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá “cắt cổ”</a></p>
                                </div>
                            </div>

                            <div class="main-left-list-frame-item">
                                <div class="main-left-list-frame-item-img"><a href="./new-information5.php"><img src="../Assets/new/new-1.jpg" alt=""></a></div>
                                <div class="main-left-list-frame-item-text">
                                    <p><a href="./new-information5.php">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- hết làm phần main left -->

                <!-- làm phần main right -->
                <!-- <div class="main-right">
                    <?php
                    include "../admin/connect.php";
                    $sql = "SELECT * FROM `tintuc`";
                    $query = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                        if ($i < 30) {
                            $i++;
                    ?>
                            <div class="main-right-item">
                                <a href="./new-information1.php"><img src="../Assets/anhtintuc/<?php echo $row["anhtintuc"] ?>" alt=""></a>
                                <div class="main-right-item-text">
                                    <h2 class="main-right-item-text-tittle"><a href="./new-information1.php"><?php echo $row["tentintuc"] ?></a></h2>
                                    <p class="main-right-item-text-information"><a href="./new-information1.php"><?php echo $row["mota"] ?></a></p>
                                </div>

                                <div class="main-right-item-time">
                                    <p><span><?php echo $row["thoigian"] ?></span></p>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div> -->
                <!-- hết làm phần main right -->
            </div>
        </div>
    </div>

    <!-- hết làm phần main -->

    <!-- làm phần footer  -->
    <?php
      include('Shared/footer.php');
    ?>
    <!-- hết phần footer -->
    <!-- thư viện js của jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- thư viện js của AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
</body>

</html>