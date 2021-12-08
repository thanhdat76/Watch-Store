<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_add_new.css">
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
    if(isset ($_GET["id"])){
        $id=$_GET["id"];
    }
    $sql="SELECT * FROM `tintuc` WHERE ID=$id";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
    if(isset($_POST["btn_submit"]))
    {
        $tentintuc=$_POST["tentintuc"];
        $motatintuc=$_POST["motatintuc"];
        $thoigiantintuc=$_POST["thoigiantintuc"];
        $destinnation="../anhtintuc/".$_FILES["anhtintuc"]["name"];
        move_uploaded_file($_FILES["anhtintuc"]["tmp_name"],$destinnation);
        if($tentintuc!="" && $motatintuc!="" && $thoigiantintuc!=""&&$_FILES["anhtintuc"]["name"])
        {
            $tenanh=$_FILES["anhtintuc"]["name"];
            $sql="UPDATE `tintuc` SET `anhtintuc`='$tenanh',`tentintuc`='$tentintuc',`mota`='$motatintuc',`thoigian`='$thoigiantintuc' WHERE ID=$id";
            $query=mysqli_query($conn, $sql);
            header('Location: admin_new.php');
        }
        else{
            echo"Mời nhập đầy đủ thông tin";
        }
    }


    ?>
        <div  class="main_right">
            <h3>Thêm tin tức</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="form_add">
                <div class="item">
                    <input type="text" name="tentintuc" placeholder="Nhập tên tin tức" value="<?php echo $row["tentintuc"]?>">
                </div>
                <div class="item">
                    <input type="text" name="motatintuc" placeholder="Nhập mô tả tin tức" value="<?php echo $row["mota"]?>">
                </div>
                <div class="item">
                    <input type="text" name="thoigiantintuc" placeholder="Nhập thời gian tin tức" value="<?php echo $row["thoigian"]?>">
                </div>
                <div class="item">
                    <input class="item_file" type="file" name="anhtintuc">
                </div>
                <button type="submit" name="btn_submit" class="btn_submit">Sửa sản phẩm</button>
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