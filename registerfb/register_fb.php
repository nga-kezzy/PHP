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
                <input type="text" name="txt_ho" placeholder="Họ">
                <input type="text" name="txt_ten" placeholder="Tên">
            </div>
            <div class="line"><input type="text" name="sdt_email" placeholder="Số điện thoại hoặc email"></div>
            <div class="line"><input type="password" name="txt_password" placeholder="Mật khẩu"></div>
            <div class="line">
                Ngày <input type="number" name="txt_day" min="1" max="31">
                Tháng <input type="number" name="txt_month" min="1" max="12">
                Năm<input type="number" name="txt_year" min="1890" max="2022">
        </div>
            <div class="line">
                <input type="radio" name="txt_gt" value="Nữ">Nữ
                <span></span>
                <input type="radio" name="txt_gt" value="Nam">Nam
        </div>
            <div class="line"><input type="submit" name="submit" value="Tạo tài khoản"></div>
            
        </form>
    
    </div>

    
</body>
</html>