<?php
    include'connect.php';
    class data{
        Public function login() {
            global $conn;
            $sql = "SELECT * FROM rigiter";
            $run = $conn->query($sql);
            $num = mysql_num_rows($run);
            return $num;
        }
    }
?>