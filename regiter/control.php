<?php
    include 'connect.php';
     class Data{

        public function regiter($username,$gender,$email,$phone,$password,$hobby ='',$avatar='',$role=2){
            global $conn;
            $sql= "INSERT INTO users(username,gender,email, phone, password, hobby,  avatar,  role) 
            VALUES('$username', '$gender', '$email','$phone','$password','$hobby','$avatar','$role')";
            $run =mysqli_query($conn,$sql);
            return $run;
        }
     }
?>