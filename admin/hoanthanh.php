<?php
include"./connect.php";
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $hoanthanh="Đã thanh toán";
    $sql="UPDATE `giohang` SET `trangthai`='$hoanthanh' WHERE IDgiohang=$id";
    $query=mysqli_query($conn, $sql);
    header("location: admin_cart.php");
}
else{
    echo "lỗi";
}
?>