<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    ul {
        list-style: none;
    }

    .main {
        width: 400px;
        margin: 150px auto 0;
    }

    ul>li {
        display: flex;
        margin: 10px 0;
    }

    ul>li>div:first-child {
        flex-basis: 150px;
    }

    ul>li>div:last-child {
        flex: 1;
    }

    input[type="submit"] {
        background-color: blue;
        color: white;
        padding: 5px;
        width: 100%;
    }

    input[type="text"],
    input[type="email"] {
        padding: 10px;
        width: 100%;
    }

    textarea {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="main">
        <form method="Get">
            <ul>
                <li>
                    <div>Name</div>
                    <div><input type="email" name="txt_name"></div>
                </li>
                <li>
                    <div>Email</div>
                    <div><input type="text" name="txt_email"></div>
                </li>
                <li>
                    <div>Education</div>
                    <div><Select value="" name="txt_select">
                            <option value="defaul">...</option>
                            <option value="c1">cap 1</option>
                            <option value="c2">cap 2</option>
                        </Select>
                    </div>
                </li>
                <li>
                    <div>Gender</div>
                    <div>
                        <input type="radio" name="txt_gender">Nam
                        <input type="radio" name="txt_gender">Nữ
                    </div>
                </li>
                <li>
                    <div>Hobbies</div>
                    <div><input type="checkbox" name="txt_hobbies[]" value="drawing"> drawing
                        <input type="checkbox" name="txt_hobbies[]" value="singing"> singing
                        <input type="checkbox" name="txt_hobbies[]" value="dancing"> dancing
                    </div>

                </li>
                <li>
                    <div>Comment</div>
                    <div><textarea name="txt_comment" id="" cols="30" rows="5"></textarea></div>
                </li>
                <li>
                    <div>
                        <input type="submit" value="Submit" name="txt_submit">
                    </div>

                </li>
            </ul>
        </form>
        <?php
        $hobbies = "";  // khaI báo biến hobbies bằng chuỗi rỗng
        foreach ($_GET["txt_hobbies"] as $value        //duyệt các phần tử của mảng
        ) {
            $hobbies .= $value;     // nối chuỗi
        }
        echo $hobbies;
        echo $_GET["txt_name"];
        ?>

    </div>
</body>

</html>