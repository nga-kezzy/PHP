<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'zerotype';
$conn =mysqli_connect($server, $user, $pass, $database);
mysqli_query($conn, '$set name "utf8"');
?>