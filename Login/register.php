<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_register.css" class="css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <div class="line">
                <input type="text" name="txt_hoten" placeholder="Họ và tên" >
            </div>
            <div class="line"><input type="text" name="txt_email" placeholder=" email" ></div>
            <div class="line"><input type="password" name="txt_password" placeholder="Mật khẩu" ></div>
            
            
            <div class="line"><input type="submit" name="submit" value="Tạo tài khoản"></div>
            
        </form>
    
    </div>
    <?php
        include'../connect.php';  
        include'control.php';
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        else
            echo "Connection successfully";
        
            if(isset($_POST['submit']) && $_POST['txt_email'] != '' && $_POST['txt_password'] && $_POST['txt_hoten']){
                $data = new Data();
                $register = $data->users(
                    $_POST['txt_hoten'],
                    $_POST['txt_email'],
                    $_POST['txt_password']
                );
                if($register){
                    
                    echo "<script> alert('đăng ký thành công')</script>";
                }
                
            }
            else{
                    
                echo "<script> alert('đăng ký ko thành công')</script>";
            }
    ?>
</body>
</html>