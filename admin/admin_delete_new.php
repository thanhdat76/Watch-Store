<?php
include"./connect.php";
    if(isset ($_GET["id"])){
        $id=$_GET["id"];
    }
    $sql="DELETE FROM sanpham WHERE ID=".$id;
	if($conn->query($sql)=== TRUE) {
		header('Location: admin_sanpham.php');
	} else {
		echo "Error: ". $sql . "<br>" . $conn->error;
	}
?>