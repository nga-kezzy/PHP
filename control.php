<?php
    include'connect.php';

    class Data{
        public function users($fullname, $email, $password){ //thêm dl vào database
            global $conn;
            $sql = "INSERT INTO users(fullname, email, password )   
            VALUES('$fullname', '$email', '$password')";
            $run = mysqli_query($conn,$sql);
            return $run;
        }

        public function login($email, $password){
            global $conn;
            $sql = " SELECT * FROM users WHERE email = '$email'and password = '$password'";
            $run = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($run);
            return $num;
        }

        public function login_user($user){   // kiểm tra email có đúng ko
            global $conn;
            $sql = "SELECT * FROM user WHERE username = '$user' ";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
    }
?>