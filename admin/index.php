<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="../css/login.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./ICON/fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/css/all.min.css">
</head>
<body>

<?php
include"./connect.php";
if(isset($_GET["login"]))
{
    $username=$_GET["username"];
    $password=$_GET["password"];
    $sql="SELECT * FROM `login` WHERE username='".$username."' and password = '".$password."'";
    $query=mysqli_query($conn, $sql);
    $count =mysqli_num_rows($query);
    if($count>0)
    {
        header("Location: admin_sanpham.php");
    }
    else{
        echo '<h3 style="text-align: center; color:white; margin: 20px 0px;">Mật khẩu hoặc tài khoản bạn bị sai sai mời bạn nhập lại thông tin</h3>';
    }
}
?>
    <div class="header">
        <h2 class="tittle">login</h2>
        <form action="" method="GET">
            <div class="header-main">
                <div class="backgroud-input">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="USERNAME" name="username">
                </div>
                <div class="backgroud-input pass">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="PASSWORD" name="password">
                </div>
                <div class="remember-pass">
                    <div class="remember-item">
                        <input type="checkbox" value="Remember me"> <p>Remember me</p>
                    </div>
                    <p><a href="">Forget password</a></p>
                </div>
            </div>
        <div class="header-bottom">
            <input type="submit" value="Login" name="login">
        </div>
        </form>
    </div>
</body>
</html>