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

    <div class="container">
    <h2>Regiter</h2> <br> 
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="line">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <div class="line">
                <div class="left">
                    Username:
                </div>
                <div class="right">
                    <input type="text" name="txt_username">
                </div>
            </div>
            <div class="line">
                <div class="left">Gender</div>
                <div class="right">
                    <input type="radio" name="txt_gender" value="nam" > Make
                    <input type="radio" name="txt_gender" value="nu" > Famake
                </div>
            </div>
            <div class="line">
                <div class="left">Email</div>
                <div class="right">
                    <input type="email" name="txt_email">
                </div>
            </div>
            <div class="line">
                <div class="left">Phone</div>
                <div class="right">
                    <input type="number" name="txt_phone" min=0  >
                </div>
            </div>
            <div class="line">
                <div class="left">Password</div>
                <div class="right">
                    <input type="password" name="txt_password">
                </div>
            </div>
            <div class="line">
                <div class="left">Hobby</div>
                <div class="right">
                    <input type="checkbox" name="txt_hobby[]" value="xemphim" > Xem phim  <br>
                    <input type="checkbox" name="txt_hobby[]" value="coding " > Coding  <br> 
                    <input type="checkbox" name="txt_hobby[]" value="game" >  Game  <br>

                </div>
            </div>
            <div class="line">
                <div class="left">Avatar</div>
                <div class="right">
                    <input type="file" name="txt_file">
                </div>
            </div>
            <div class="line">
                
                    <input type="submit" value="Regiter" name="submit">
                            
            </div>
        </form>
    </div>

    <?php
    include 'connect.php';
    include 'control.php';
    $hobby='';
    if(isset($_POST['submit'])&& $_POST['txt_username'] != '' &&
    $_POST['txt_gender'] != '' &&
    $_POST['txt_email'] != '' &&
    $_POST['txt_phone'] != '' &&
    $_POST['txt_password'] != ''){
        $data = new Data();
        $run = $data->login_user($_POST['txt_username']);
                $num = mysqli_num_rows($run);
                if($num != 0){
                    echo "user name đã tồn tại";
                    exit();
                }
                else{
                    foreach ($_POST['txt_hobby'] as $va_hobby) {
                        $hobby.=$va_hobby;
                    }
                    echo $hobby;
                    move_uploaded_file($_FILES['txt_file']['tmp_name'],
                    'upload/'.$_FILES['txt_file']['name']);
                }
                $regiter = $data->regiter(
                    $_POST['txt_username'], 
                    $_POST['txt_gender'],
                    $_POST['txt_email'],
                    $_POST['txt_phone'],
                    $_POST['txt_password'],
                    $hobby,
                    $_FILES['txt_file']['name']
                ); 
                if($regiter){
                    echo "đăng ký thành công";
                }
        
        
    }
    else
    echo "đăng ký không thành công";
    ?>
    <img src="upload/<?php echo $_FILES['txt_file']['name']?>" width = "70%"; height = "70%">
</body>
</html>