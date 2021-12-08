<?php
include"./connect.php";
if(isset($_POST["submit_lienhe"]))
{
    $hoten=$_POST["hoten"];
    $email=$_POST["email"];
    $sdt=$_POST["sdt"];
    $diachi=$_POST["diachi"];
    $mota=$_POST["mota"];
    if($hoten!=""&& $email!=""&& $sdt!=""&& $diachi!="")
    {
    echo $hoten;
    echo $email;
    echo $sdt;
    echo $diachi;
    echo $mota;
        $sql="INSERT INTO `lienhe`(`tenkhachhang`, `sdt`, `diachi`, `email`, `mota`) VALUES ('$hoten','$sdt','$diachi','$email','$mota')";
        $query=mysqli_query($conn, $sql);
        header("Location: ../contact.php?thanhcong=thanhcong");
    }
    else
    {
        header("Location: ../contact.php?loi=loi");
    }
} 
?>