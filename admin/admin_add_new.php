<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_add_new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <?php
    include"./connect.php";
    mysqli_set_charset($conn, 'UTF8');
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
            $sql="INSERT INTO `tintuc`(`anhtintuc`, `tentintuc`, `mota`, `thoigian`) VALUES ('$tenanh','$tentintuc','$motatintuc','$thoigiantintuc')";
            $query=mysqli_query($conn, $sql);
            header('Location: admin_new.php');
        }
        else{
            echo"Mời nhập đầy đủ thông tin";
        }
    }
    ?>
    <div class="container">
        <div  class="main_right">
            <h3>Thêm tin tức</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="form_add">
                <div class="item">
                    <input type="text" name="tentintuc" placeholder="Nhập tên tin tức">
                </div>
                <div class="item">
                    <input type="text" name="motatintuc" placeholder="Nhập mô tả tin tức">
                </div>
                <div class="item">
                    <input type="text" name="thoigiantintuc" placeholder="Nhập thời gian tin tức">
                </div>
                <div class="item">
                    <input class="item_file" type="file" name="anhtintuc">
                </div>
                <button type="submit" name="btn_submit" class="btn_submit">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
</body>
</html>