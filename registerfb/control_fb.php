<?php
    include '../connect.php';
    
   class Data{
        public function userfb($hoten,$sdt_email,$password,$ngaysinh,$gioitinh){
            global $conn;
            $sql = "INSERT INTO user_fb(hoten, sdt_email, password, ngaysinh, gioitinh) VALUES 
            ('$hoten','$sdt_email','$password','$ngaysinh','$gioitinh')";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
   }
    
?>