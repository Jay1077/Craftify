<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "handicraft";
//$con = mysqli_connect("localhost","root","","handicraft") or die("connection error".mysqli_error());
$con = mysqli_connect($servername,$username,$password,$db_name) or die("connection error".mysqli_error());
?>