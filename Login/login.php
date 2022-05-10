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
            <input type="password" name="txt_pass" placeholder="Password" class="user"> <br>
            <input type="submit"  name="submit" value="Login" class="submit">


        </form>

        <?php
        include 'control.php';
        data = new Data();
            if(isset($_POST['submit'])){
                if($_POST['txt_email'] != )
            }
        ?>
        
    </div>
</body>
</html>