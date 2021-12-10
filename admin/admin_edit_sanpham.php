<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin_edit_sanpham.css">
    <link rel="stylesheet" href="../css/admin_chung.css">
</head>
<body>


<div class="admin">
            <div class="admin_frame">
                <div class="admin_left">                 
                    <div class="admin_left_quanly">
                    <h3>Admin</h3>
                        <div class="admin_left_quanly_frame">
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_sanpham.php">Product</a></p>
                            </div>

                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_client.php">Client</a></p>
                            </div>

                            <!--
                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_new.php">Quản lý tin tức sự kiện - News & Sale</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_cart.php">Quản lý đơn hàng - Order</a></p>
                            </div>


                            <div class="main_left_quanly_frame_item">
                                <p><a href="./admin_lienhe.php">Quản lý phản hồi khách hàng - Contact</a></p>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="admin_right">
    <?php
    include"./connect.php";
    if(isset ($_GET["id"])){
        $id=$_GET["id"];
    }
    $sql="SELECT * FROM `sanpham` WHERE ID=$id";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
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
            $sql="UPDATE `sanpham` SET `tensanpham`='$tensanpham',`anhsanpham`='$tenanh',`anh1`='$anh1',`anh2`='$anh2',`anh3`='$anh3',`anh4`='$anh4',`mota`='$mota',`gia`='$giasanpham' WHERE ID=$id";
            $query=mysqli_query($conn, $sql);
            header('Location: admin_sanpham.php');
        }
        else{
            echo"Mời nhập đầy đủ thông tin";
        }
    }
    ?>
        <div  class="main_right">
            <h3>Sửa sản phẩm</h3>
                <form action="" method="POST" enctype="multipart/form-data" class="form_add">
                <div class="item">
                    <input type="text" name="tensanpham" placeholder="Nhập tên sản phẩm" value="<?php echo $row["tensanpham"]?>">
                </div>
                <div class="item">
                    <input type="text" name="giasanpham" placeholder="Nhập giá sản phẩm" value="<?php echo $row["gia"];?>">
                </div>
                <div class="item">
                    <input class="item_file" type="file" name="anhsanpham">
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
                    <textarea name="mota" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm" value="<?php echo $row["mota"];?>" ></textarea>
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