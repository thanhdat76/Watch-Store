<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_add_sanpham.css">
    <link rel="stylesheet" href="../css/admin_chung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
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
                                <p><a href="">Quản lý sản phẩm - Product</a></p>
                            </div>

                            <div class="main_left_quanly_frame_item">
                                <p><a href="">Quản lý tin tức sự kiện - News & Sale</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="">Quản lý đơn hàng - Order</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="">Quản lý phản hồi khách hàng - Contact</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="admin_right">
                <?php
    include"./connect.php";
    mysqli_set_charset($conn, 'UTF8');
    if(isset($_POST["btn_submit"]))
    {
        $tensanpham=$_POST["tensanpham"];
        $giasanpham=$_POST["giasanpham"];
        $destinnation="../anhsanpham/".$_FILES["anhsanpham"]["name"];
        move_uploaded_file($_FILES["anhsanpham"]["tmp_name"],$destinnation);
        move_uploaded_file($_FILES["anh1"]["tmp_name"],"../anhsanpham/".$_FILES["anh1"]["name"]);
        move_uploaded_file($_FILES["anh2"]["tmp_name"],"../anhsanpham/".$_FILES["anh2"]["name"]);
        move_uploaded_file($_FILES["anh3"]["tmp_name"],"../anhsanpham/".$_FILES["anh3"]["name"]);
        move_uploaded_file($_FILES["anh4"]["tmp_name"],"../anhsanpham/".$_FILES["anh4"]["name"]);
        $mota=$_POST["mota"];
        if($tensanpham!="" && $giasanpham!="" && isset($_FILES["anhsanpham"]["name"]) && isset($_FILES["anh1"]["name"]) && isset($_FILES["anh2"]["name"]) && isset($_FILES["anh3"]["name"]) && isset($_FILES["anh4"]["name"]) && $mota!="")
        {
            $tenanh=$_FILES["anhsanpham"]["name"];
            $anh1=$_FILES["anh1"]["name"];
            $anh2=$_FILES["anh2"]["name"];
            $anh3=$_FILES["anh3"]["name"];
            $anh4=$_FILES["anh4"]["name"];
            $sql="INSERT INTO `sanpham`(`tensanpham`, `anhsanpham`, `anh1`, `anh2`, `anh3`, `anh4`, `mota`, `gia`) VALUES ('$tensanpham','$tenanh','$anh1','$anh2','$anh3','$anh4','$mota','$giasanpham')";
            $query=mysqli_query($conn, $sql);
            header('Location: admin_sanpham.php');
        }
        else{
            echo"Mời nhập đầy đủ thông tin";
        }
    }
    ?>
        <div  class="main_right">
            <h3>Thêm sản phẩm</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="form_add">
                <div class="item">
                    <input type="text" name="tensanpham" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="item">
                    <input type="text" name="giasanpham" placeholder="Nhập giá sản phẩm">
                </div>
                <div class="item">
                <p>Nhập ảnh chính</p> <input class="item_file" type="file" name="anhsanpham">
                </div>
                <div class="item">
                <p>Nhập ảnh phụ 1</p> <input class="item_file" type="file" name="anh1">
                </div>
                <div class="item">
                <p>Nhập ảnh phụ 2</p> <input class="item_file" type="file" name="anh2">
                </div>
                <div class="item">
                <p>Nhập ảnh phụ 3</p>  <input class="item_file" type="file" name="anh3">
                </div>
                <div class="item">
                <p>Nhập ảnh phụ 4</p>  <input class="item_file" type="file" name="anh4">
                </div>
                <div class="item">
                    <textarea name="mota" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>
                <button type="submit" name="btn_submit" class="btn_submit">Thêm sản phẩm</button>
            </form>
        </div>
                </div>
            </div>
    </div>

    <footer>
        <h1>Hệ thống quản lý cửa hàng bán đồng hồ</h1>
    </footer>
</body>
</html>