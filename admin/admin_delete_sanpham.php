<?php
include"./connect.php";
    if(isset ($_GET["id"])){
        $id=$_GET["id"];
        $sql="DELETE FROM `sanpham` WHERE ID=$id";
    $query=mysqli_query($conn, $sql);
    echo $id;
		header('Location: admin_sanpham.php');
    }
?>