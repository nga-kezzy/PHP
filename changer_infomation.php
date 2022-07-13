<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>changer password</title>
    <style>
        .container {
            text-align: center;
        }

        .edit_infomation {
            margin-top: 15px;
        }

        .change_submit {
            margin-top: 25px;
        }

        input[type="submit"] {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h2>Change infomation</h2>
            <div class="edit_infomation">
                <div class="left">Username:</div>
                <div class="right"><input type="text" name="txt_name"></div>
            </div>
            <div class="edit_infomation">
                <div class="left">Phone:</div>
                <div class="right"><input type="number" min="0" name="txt_phone"></div>
            </div>
            <div class="edit_infomation">
                <div class="left">Hobby</div>
                <div class="right">
                    <input type="checkbox" name="txt_hobby" value="Travel">Travel
                    <input type="checkbox" name="txt_hobby" value="Football">Football
                    <input type="checkbox" name="txt_hobby" value="Swiming">Swiming
                </div>
            </div>
            <div class="edit_infomation">
                <div class="left">Avatar:</div>
                <div class="right"><input type="file" name="txt_file"></div>
            </div>
            <div class="change_submit">

                <input type="submit" value="Change" name="submit">
            </div>
        </form>
    </div>

    <?php
    include 'control.php';
    if (isset($_POST['submit'])) {
        $data = new Data();
        $updata = $data->updata(
            $_POST['txt_name'],
            $_POST['txt_phone'],
            $_POST['txt_hobby'],
            $_FILES['txt_file']['name'],
            $email = $_SESSION['username']
        );
        if ($updata) {
            move_uploaded_file(
                $_FILES['txt_file']['tmp_name'],
                'upload/' . $_FILES['txt_file']['name']
            );
        }
    }
    ?>
</body>

</html>