<?php
$server ="localhost:3306";
$user = "root";
$password = "1234";
$dname = "healthTP";

$conn = new mysqli($server, $user, $password, $dname);

if($conn->connect_error) echo "<h2> 접속에 실패하였습니다.</h2>";
else
?>

