<?php
include ('connectsql.php');
define('SALT', 'hehehe'); 
function decryptStringArray ($stringArray, $key = "fortesting") {
 $s = unserialize(rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode(strtr($stringArray, '-_,', '+/=')), MCRYPT_MODE_CBC, md5(md5($key))), "\0"));
 return $s;
}
$username = $_POST['email'];
$password = $_POST['password'];

if ($username == '' || $password == '' ) {
	echo "<script>alert('Wrong Input')</script>";
	echo "<script>window.location.href='/omj/login.php'</script>";
	
} else {
	
	$query = "Select * From user where email = '$username'";
	$result = mysqli_query($db,$query);
	$count = mysqli_num_rows($result);
	
	if ($count >= 1) {
		$newpassword = decryptStringArray(mysqli_fetch_assoc($result)['password']);
		if ($newpassword == $password) {
			echo "<script>alert('SuccessFul')</script>";
		setcookie('role',"user", time() + (86400 * 30), "/");
		setcookie('ac',"$username",time() + (86400 * 30), "/");
		
		echo "<script>window.location.href='/omj/index.php'</script>";
	} else {
		echo "<script>alert('Wrong password')</script>";
	echo "<script>window.location.href='/omj/login.php'</script>";
	}
		
	} else {
		echo "<script>alert('Wrong account')</script>";
	echo "<script>window.location.href='/omj/login.php'</script>";
	}
	
	
	
	
	
}

?>