<?php
session_start();
$con = mysqli_connect('localhost','id6046049_root','manguli','id6046049_validation');
if($con){
	header("location:login.php");
}else{
	echo "no connection";
}
mysqli_select_db($con , 'id6046049_validation');
$name = $_POST['user'];
$pass = $_POST['pass'];
$conpass = $_POST['conpass'];
$mobno = $_POST['mobno'];
$email = $_POST['email'];
$q = "select * from form where name = '$name' && password = '$pass' && confirm_password = '$conpass' && mobileno = '$mobno' && Email_Id = '$email'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "duplicate data";
}else{
	$qy = "insert into form(name , password , confirm_password , mobileno , Email_Id) values('$name','$pass','$conpass','$mobno','$email')";
	mysqli_query($con , $qy);
}
?>