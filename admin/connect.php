<?php
$local="localhost";
$server="root";
$password="";
$database="clock";
$conn=mysqli_connect($local, $server, $password, $database);
mysqli_set_charset($conn, 'UTF8');
if(mysqli_connect_error($conn))
{
    echo "Lỗi kết nối".mysqli_connect_error($conn);
    exit;
}
?>