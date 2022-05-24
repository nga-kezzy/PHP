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
</head>
<body>
    <?php
    include'control.php';
    $data = new Data();
    $user = $data ->login_user($_SESSION['username']);
    
    foreach ($user as $value) {
        $get_user = $value['username'];
    }
    echo"Hello ".$get_user;

    
    
    ?>


</body>
</html>


