<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_fb.css" class="css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <div class="line">
                <input type="text" name="txt_hoten" placeholder="Họ và tên">
            </div>
            <div class="line"><input type="text" name="txt_sdt_email" placeholder="Số điện thoại hoặc email"></div>
            <div class="line"><input type="password" name="txt_password" placeholder="Mật khẩu"></div>
            <div class="line">
                <input type="number" name="txt_ngaysinh" placeholder="Ngày sinh">
                
        </div>
            <div class="line">
                <input type="radio" name="txt_gioitinh" value="Nữ">Nữ
                <span></span>
                <input type="radio" name="txt_gioitinh" value="Nam">Nam
        </div>
            <div class="line"><input type="submit" name="submit" value="Tạo tài khoản"></div>
            
        </form>
    
    </div>

    <?php
        include'../connect.php';
        include'control_fb.php';
        if (!$conn) {   // kiểm tra connect đc vs database chưa
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        if(isset($_POST['submit'])){
            $data= new Data();
            $register = $data ->userfb(
                // $_POST['txt_hoten'],
                // $_POST['txt_sdt_email'],
                // $_POST['txt_password'],
                // $_POST['txt_ngaysinh'],
                // $_POST['txt_gioitinh'],

                !empty($_POST['txt_hoten']) ? $_POST['txt_hoten'] : null,
                !empty($_POST['txt_sdt_email']) ? $_POST['txt_sdt_email'] : null,
                !empty($_POST['txt_password']) ? $_POST['txt_password'] : null,
                !empty($_POST['txt_ngaysinh']) ? $_POST['txt_ngaysinh'] : null,
                !empty($_POST['txt_gioitinh']) ?  $_POST['txt_gioitinh'] : null,
                
            );
            if($register) {
                
                echo" Đăng ký thành công" ;
            }
            else{
                
                echo " Đăng ký không thành công" ;
            }
        }
        
    ?>
</body>
</html>