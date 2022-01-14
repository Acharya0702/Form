<?php
session_start();
$con = mysqli_connect('localhost','id6046049_root','manguli','id6046049_validation');
if($con){
	header('location:home.php');
}else{
	echo "no connection";
}
mysqli_select_db($con , 'id6046049_validation');
$name = $_POST['user'];
$pass = $_POST['pass'];
$q = "select * from form where name = '$name' && password = '$pass' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['name']=$name;
	header('location:home.php');
}else{
	header('location:login.php');
}
?>