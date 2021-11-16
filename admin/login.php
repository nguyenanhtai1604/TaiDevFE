<?php 
    include "../config.php";
    session_start();

    if(isset($_POST["submit"])){

    $email =mysqli_real_escape_string($conn,$_POST["email"]) ;
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    $sql = "SELECT  `email`, `password` FROM `admin_info` WHERE email = '$email' and password = '$password'";
    if ($conn->query($sql) == TRUE) {
        header("Location: index.php");
        $_SESSION['user_id']=$email;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/fonts/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" href="../admin/admincss/login.css">
    <title>LoginUsExpress</title>
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng Nhập</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <form class="sign-in-htm" action="" method="POST">
                    <div class="group">
                        <label for="inputEmail" class="label"> Địa Chỉ Email</label></label>
                        <input id="inputEmail" name="email" type="email" class="input" placeholder="Nhập địa chỉ email...">
                    </div>
                    <div class="group">
                        <label for="inputPassword" class="label">Mật Khẩu</label>
                        <input id="inputPassword" name="password" type="password" class="input" data-type="password"  placeholder="Nhập mật khẩu...">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"> </span>Lưu mật khẩu</label>
                    </div>
                    <div class="group">
                        <button class="button" type="submit" name="submit">Sign in</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="">Quên mật khẩu?</a>
                    </div>
                </div>
                <!-- <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div> -->
            </div>
        </div>
    </div>
</body>

</html>