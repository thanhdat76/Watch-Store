<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
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
     <link rel="stylesheet" href="../css/contact.css">
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
            <div class="main-2">
                <div class="main-2-item">
                    <div class="main-2-item-img">
                        <img src="./contact/contact1.PNG" alt="">
                    </div>
                    <div class="main-2-item-text">
                        <h2>Địa chỉ</h2>
                        <p>235 Hoàng Quốc Việt, quận Bắc Từ Liêm, Hà Nội</p>
                    </div>
                </div>


                <div class="main-2-item">
                    <div class="main-2-item-img">
                        <img src="./contact/contact2.PNG" alt="">
                    </div>
                    <div class="main-2-item-text">
                        <h2>Điện thoại:</h2>
                        <p><a href="">0123456789</a></p>
                        <p>Bấm 113 – Phòng kinh doanh</p>
                        <p>Bấm 114 – Phòng kỹ thuật</p>
                    </div>
                </div>



                <div class="main-2-item">
                    <div class="main-2-item-img">
                        <img src="./contact/contact3.PNG" alt="">
                    </div>
                    <div class="main-2-item-text">
                        <h2>Email:</h2>
                        <p><a href="" class="main-2-item-text-link">epu235@gmail.com</a></p>
                        <p><a href="" class="main-2-item-text-link">Electric Power University</a></p>
                    </div>
                </div>
            </div>




            <div class="main-3">
                <form action="./admin/admin_add_lienhe.php" method="POST" enctype="multipart/form-data" >
                    <div class="main-3-container">
                        <div class="main-3-item1">
                            <div class="main-3-item1-item">
                                <input name="hoten" class="main-3-item1-item-input" type="text" placeholder="Họ và tên">
                            </div>
        
                            <div class="main-3-item1-item">
                                <input name="email" class="main-3-item1-item-input" type="email" placeholder="Email">
                            </div>
        
        
                            <div class="main-3-item1-item">
                                <input name="sdt" class="main-3-item1-item-input" type="text" placeholder="Số điện thoại">
                            </div>
        
        
                            <div class="main-3-item1-item">
                                <input name="diachi" class="main-3-item1-item-input" type="text" placeholder="Địa chỉ">
                            </div>
                        </div>


                        <div class="main-3-item2">
                            <textarea name="mota" id="" cols="30" rows="7" placeholder="Lời nhắn"></textarea>
                        </div>

                        <div class="main-3-item3">
                            <input name="submit_lienhe" type="submit" value="Gửi">
                        </div>
                </div>
                </form>
            </div>
        </div>

        <?php if(isset($_GET["thanhcong"]))
        {
        ?>
        <script>
            alert("Cảm ơn bạn đã để lại lời nhận xét cho chúng tôi");
        </script>
        <?php }?>
    </div>
    <!-- hết phần main -->

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