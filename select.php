<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin: 0 auto;
            width: 930px;

        }

        td {
            text-align: center;
        }

        .row-id {
            border: 1px solid black;
            width: 35px;
        }

        .row-username {
            border: 1px solid black;
            width: 110px;
        }

        .row-email {
            border: 1px solid black;
            width: 190px;
        }

        .row-pass {
            border: 1px solid black;
            width: 130px;
        }

        .row-phone {
            border: 1px solid black;
            width: 110px;
        }

        .row-hobby {
            border: 1px solid black;
            width: 170px;
        }

        .row-avatar {
            border: 1px solid black;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">

            <table>
                <tr>
                    <td class="row-id">Id</td>
                    <td class="row-username">Username</td>
                    <td class="row-email">Email</td>
                    <td class="row-pass">Password</td>
                    <td class="row-phone">Phone</td>
                    <td class="row-hobby">Hobby</td>
                    <td class="row-avatar">Avatar</td>
                </tr>
                <?php
                include 'control.php';
                $data = new Data();
                $users = $data->select();
                foreach ($users as $value) {
                ?>
                    <tr>

                        <td class="row-id"> <?php echo $value['id']; ?> </td>
                        <td class="row-username"> <?php echo $value['username'];  ?></td>
                        <td class="row-email"> <?php echo $value['email']; ?> </td>
                        <td class="row-pass"> <?php echo $value['password']; ?> </td>
                        <td class="row-phone"> <?php echo $value['phone']; ?> </td>
                        <td class="row-hobby"> <?php echo $value['hobby']; ?> </td>
                        <td class="row-avatar"> <?php echo $value['avatar']; ?> </td>

                    </tr>
                <?php
                }
                ?>
            </table>

        </form>
    </div>
</body>

</html>