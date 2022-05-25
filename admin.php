<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .container{
            width: 400px;
            margin: auto;
        }

        .out{
            color: red;
            font-size: 24px;
            text-decoration: none;
        }
        
        .img{
            width: 200px;
            height: 300px;
        }

        .container{
            display:flex;
            float:left;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <div class="infomation">
    <?php
    include'control.php';
    
    $data = new Data();
    $user = $data ->login_user($_SESSION['username']);
    
    foreach ($user as $value) {
        $get_user = $value['username'];
        $get_email = $value['email'];
        $get_phone = $value['phone'];

        $get_avatar = $value['avatar'];
    }
    echo"<h3 >Hello ".$get_user."</h3>";
    echo"Email: ".$get_email."<br>"; 
    echo"Phone: ".$get_phone."<br>";
    echo"Avatar: ";
    ?>
    </div>

    <img src="upload/<?php echo$get_avatar?>" class="img" >
    <a href="logout.php" class="out">Logout </a>
    
    </div>
</body>
</html>


