<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body >
    <div id="container">
    <h3 align="center">MENU GỌI MÓN</h3>
    <table >
        <form method="POST" >
            <tr>
                <td>Số bàn</td>
                <td>
                        <input type="number" name="txt_soban" class="wt" min= 1>
                <td>
            </tr>
            <tr>
                <td class="cl_pink">Món ăn</td>
                <td class="cl_pink">Số lượng</td>
                <td class="cl_pink">Đơn giá</td>
            </tr>
            <tr>
                <td>Trà</td>
                <td>
                    <input type="number" name="txt_sl_tra" min =0>
                </td>
                <td>
                <input type="number" name="txt_gia_tra" min =0>
                </td>
            </tr>
            <tr>
                <td>Hướng dương</td>
                <td>
                    <input type="number" name="txt_sl_hd" min =0>
                </td>
                <td>
                <input type="number" name="txt_gia_hd" min =0>
                </td>
            </tr>
            <tr>
                <td>Kẹo</td>
                <td>
                    <input type="number" name="txt_sl_keo" min =0>
                </td>
                <td>
                <input type="number" name="txt_gia_keo" min =0 >
                </td>
            </tr>
            <tr>
                <td>Bánh</td>
                <td>
                    <input type="number" name="txt_sl_banh" min =0>
                </td>
                <td>
                <input type="number" name="txt_gia_banh" min =0>
                </td>
            </tr>
            <tr  >
                <td class="submit"  colspan="3 ">
                    <input type="submit" value="Tính tiền" name="txt_tinhtien"> 
                </td>
            </tr>           
            </form>
        </table>
        <?php
    if(isset($_POST['txt_tinhtien'])){
        $tongtien =0;
        $tien_tra =0;
        $tien_hd =0;
        $tien_keo =0;
        $tien_banh =0;
    
        empty($_POST['txt_sl_tra'])  ? $tien_tra =0: $tien_tra =$_POST['txt_sl_tra'] * $_POST['txt_gia_tra'];
        empty($_POST['txt_sl_hd'])  ? $tien_hd =0: $tien_hd =$_POST['txt_sl_hd'] * $_POST['txt_gia_hd'];
        empty($_POST['txt_sl_keo'])  ? $tien_keo =0: $tien_keo =$_POST['txt_sl_keo'] * $_POST['txt_gia_keo'];
        empty($_POST['txt_sl_banh'])  ? $tien_banh =0: $tien_banh =$_POST['txt_sl_banh'] * $_POST['txt_gia_banh'];
    
        $tongtien =$tien_tra + $tien_hd + $tien_keo + $tien_banh;  
        
    }
    
?>
        <div class="tong">
            <h4>Bàn số: <?php echo $_POST['txt_soban']; ?> </h4> <br>
            <h4>Tổng tiền : <?php echo $tongtien; ?> </h4>
        </div>
        </div> 
</body>
</html>