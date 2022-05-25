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
            margin:auto;
            width: 600px;
            
        }
    </style>
</head>
<body>
    
    <div class="container">
    <?php
    include'control.php';
    $data = new Data();
    $user = $data ->login_user($_SESSION['username']);
    
    foreach ($user as $value) {
        $get_user = $value['username'];
    }
    echo"<h4>Hello</h4> ".$get_user."<br>";

    foreach($user as $value){
        $get_email = $value['email'];
    }
    echo"Email: ".$get_email."<br>"; 

    foreach($user as $value){
        $get_phone = $value['phone'];
    }
    echo"Phone: ".$get_phone."<br>";


    echo"Avatar : ";
    
    ?>
    
        
    
    
    <img src="upload/<?php echo $_FILES['txt_file']['name']?>" width = "70%"; height = "100%">
    <a href="logout.php">Logout</a>
    </div>


</body>
</html>


