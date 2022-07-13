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
        .container {
            width: 800px;
            margin: auto;
            float: left;
            display: flex;
        }

        .infomation {
            width: 250px;
            height: 300px;
            display: block;
        }

        h3 {
            display: contents;
            width: 100%;
        }

        .top {
            width: 100%;
            height: 87px;
        }

        .bottom {
            display: block;
            width: 200px;
            height: 50px;
            margin-left: 125px;
            margin-top: 350px;
        }

        .out {
            color: red;
            font-size: 16px;
            text-decoration: none;
        }

        .changer {
            text-decoration: none;
            font-size: 16px;
            color: red;
        }

        .img {
            width: 300px;
            height: 350px;
        }

        .container {
            display: flex;
            /* float:left; */
        }

        .img_item {
            width: 400px;
            display: flex;
        }

        p {
            display: flex;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="infomation">
            <div class="top">
                <?php
                include 'control.php';

                $data = new Data();
                $user = $data->login_user($_SESSION['username']);


                foreach ($user as $value) {
                    $get_user = $value['username'];
                    $get_email = $value['email'];
                    $get_phone = $value['phone'];

                    $get_avatar = $value['avatar'];
                }
                echo "<h3 >Hello " . $get_user . "</h3><br>";
                echo "Email: " . $get_email . "<br>";
                echo "Phone: " . $get_phone . "<br>";
                ?>
                <div class="img_item">
                    Avatar:
                    <img src="upload/<?php echo $get_avatar ?>" class="img">
                </div>
            </div>

            <div class="bottom">
                <a href="logout.php" class="out">Logout </a>
                <p><a href="changer_infomation.php" class="changer">Change infomation</a></p>
            </div>
        </div>

    </div>
</body>

</html>