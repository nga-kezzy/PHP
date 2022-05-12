<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="css">
    <title>Document</title>
</head>
<body>
    <div>
        
        <form method="POST">
            <input type="email" name="txt_email" placeholder="Email" class="user">  <br>
            <input type="password" name="txt_password" placeholder="Password" class="user"> <br>
            <input type="submit"  name="submit" value="Login" class="submit">
        </form>

        <?php
        include'../connect.php';
        include'control.php';

        $data = new Data();
        if( isset($_POST['submit']) && $_POST['txt_email'] != '' && $_POST['txt_password'] != ''){
            $login_user = $data ->login_user();
            foreach($login_user as $value){
                $user = $value['email'];
                
            }
            if($user != $_POST['txt_email']){
                echo "<script> alert('Email không đúng')</script>";
            }
            else{
                $login = $data->login($_POST['txt_email'], $_POST['txt_password']);
                if($login !=1){
                    echo "<script> alert('Mật khẩu không đúng')</script>";
                }
                else{
                    echo "<script> alert('Đăng nhập thành công')</script>";
                }

            }
        }else{
            echo "<script> alert('Đăng nhập thất bại')</script>";
            
        }

        ?>
        
    </div>
</body>
</html>