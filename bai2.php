<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST" align = "center" autocomplete = "off">
        <h2>Nhập Liệu</h2>
        <input type="text" name="txttext" placeholder="Nhập tên" style="width: 500px; height=50px; background-color: aqua;" > <br>
        <input type="submit" name="txtsub" value="kiemtra" style="width: 100px; height=00px; margin-top:10px;">

    </form>

    <?php if (isset($_POST['txtsub']))  // kiểm tra nút sub đc nhấn hay chưa
            {
                if(empty($_POST['txttext'])){
                    echo"không đc để trống";
                }
                else{
                    switch ($_POST['txttext'])
                        {
                            case '1': echo "Sunday"; break;
                            case '2': echo "Monday"; break;
                            case '3': echo "Tuesday"; break;
                            case '4': echo "wednesday"; break;
                            case '5': echo "Thursday"; break;
                            case '6': echo "Friday"; break;
                            case '7': echo "Saturday"; break;
                            default: echo "giá trị nhập không đúng"; break;
                        }
                }
            }
    ?>
    <?php
        if(isset($_POST['txtsub'])){
            $sum= 0;
            for($i =1; $i<= $_POST['txttext']; $i++){
                
                $sum += $i;
            }
            echo "Tổng của các số là ".$sum;
        }
    ?>

</body>
</html>



