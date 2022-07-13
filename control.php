<?php
include 'connect.php';

class Data
{


    public function user($username, $gender, $email, $phone, $password, $hobby, $avatar)
    {
        //thêm dl vào database
        $hobby = implode(',', $hobby);  // hàm convert string to array

        global $conn;
        $sql = "INSERT INTO user(username, gender, email, phone, password, hobby,avatar )   
            VALUES('$username', '$gender','$email','$phone','$password','$hobby','$avatar' )";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function login($email, $password)
    {
        // kiểm tra email và password xem đúng ko nếu đúng cho login
        global $conn;
        $sql = " SELECT * FROM user WHERE email = '$email' and password = '$password'";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
    }

    public function login_user($email)
    {
        // kiểm tra email
        global $conn;
        $sql = "SELECT * FROM user WHERE email = '$email' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function updata($username, $phone, $hobby, $avatar, $email)
    {
        global $conn;
        $sql = "UPDATE user SET username ='$username', phone ='$phone', hobby = '$hobby', 
            avatar ='$avatar' WHERE email = '$email' ";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            echo "Data update";
        } else {
            echo "Data not updated";
        }
        return $run;
    }

    public function select()
    {

        global $conn;
        $sql = " SELECT * FROM user ";
        $run = mysqli_query($conn, $sql);

        return $run;
    }
}
