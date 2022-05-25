<?php
    include'connect.php';

    class Data{
        public function user($username, $gender, $email, $phone, $password, $hobby, $avatar){ 
            //thêm dl vào database

            $hobby= implode(',',$hobby);
            global $conn;
            $sql = "INSERT INTO user(username, gender, email, phone, password, hobby,avatar )   
            VALUES('$username', '$gender','$email','$phone','$password','$hobby','$avatar' )";
            $run = mysqli_query($conn,$sql);
            return $run;
        }

        public function login($email, $password){   
            // kiểm tra email và password xem đúng ko nếu đúng cho login
            global $conn;
            $sql = " SELECT * FROM user WHERE email = '$email' and password = '$password'";
            $run = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($run);
            return $num;
        }

        public function login_user($email){  
            // kiểm tra email
            global $conn;
            $sql = "SELECT * FROM user WHERE email = '$email' ";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
    }
?>