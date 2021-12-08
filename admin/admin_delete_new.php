<?php

include"./connect.php";
    if(isset ($_GET["id"])){
        $id=$_GET["id"];
    }
    $sql="DELETE FROM `tintuc` WHERE ID=$id";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
    header('Location: admin_new.php');
?>