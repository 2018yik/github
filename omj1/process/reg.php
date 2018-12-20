<?php
include ('connectsql.php');
$username = $_POST['email'];
$password = $_POST['password'];
$cf = $_POST['cp'];

if ($username == '' || $password == '' || $cf == '' || ($password != $cf)) {
	echo "<script>alert('Wrong Input')</script>";
	echo "<script>window.location.href='/omj/register.php'</script>";
	
} else {
	
	$query = "Select * From user where email = '$username'";
	$result = mysqli_query($db,$query);
	$count = mysqli_num_rows($result);
	
	if ($count >= 1) {
		echo "<script>alert('Account already existed')</script>";
	echo "<script>window.location.href='/omj/register.php'</script>";
	} else {
		$query = "Insert INTO user VALUES (DEFAULT,'$username','".encryptStringArray($password)."','user')";
		mysqli_query($db,$query);
		
		echo "<script>alert('SuccessFul')</script>";
		setcookie('role',"user", time() + (86400 * 30), "/");
		setcookie('ac',"$username",time() + (86400 * 30), "/");
		
		echo "<script>window.location.href='/omj/index.php'</script>";
	}
	
	
	
	
	
}
define('SALT', 'hehehe'); 
function encryptStringArray ($stringArray, $key = "fortesting") {
 $s = strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), serialize($stringArray), MCRYPT_MODE_CBC, md5(md5($key)))), '+/=', '-_,');
 return $s;
}
?>