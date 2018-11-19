<html>
<link rel="stylesheet" type="text/css" href="css\style.css">
<body>
<?php
include ('connectsql.php');
define('SALT', 'hehehe'); 
function decryptStringArray ($stringArray, $key = "fuckyouon9jai") {
 $s = unserialize(rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode(strtr($stringArray, '-_,', '+/=')), MCRYPT_MODE_CBC, md5(md5($key))), "\0"));
 return $s;
}
?>

<?php
if (isset($_COOKIE['per'])) {
 if ($_COOKIE['per'] == 'admin' || $_COOKIE['per'] == 'user' || $_COOKIE['per'] == 'God') {
	 include ('logfunction.php');
		echo "<script>window.location.href='ViewResultX.php'</script>";		
}
}
include ('logfunction.php');
include('block9uip.php');
?>
<form action="#" method="POST">
	<a>Account:</a><input type="text" id='user' name='user'><br>
	<a>Password:</a><input type="password" id='password' name='password'><br>
	<input type="submit" name="submit"></input>
	</form>
	
	
	<?php
	if (isset($_POST['submit'])) {
		$account = $_POST['user'];
		$password = $_POST['password'];
		
		If ($account == "" || $password == "" ) {
			echo "<script>alert('Can not be null')</script>";
		} Else {
			$query = "Select * From userlist where username ='" . $account ."'";
			$x = mysqli_query($db,$query);
			$count = mysqli_num_rows($x);
			If ($count < 1 ) {
				echo "<script>alert('Wrong Account= =')</script>";
			} else {
				$row = mysqli_fetch_assoc($x);
				If (decryptStringArray($row['password']) == $password AND $row['Permission'] == "admin") {
					setcookie('per',"admin", time() + (86400 * 30), "/");
					setcookie('diu',"$account",time() + (86400 * 30), "/");
					echo "<script>alert('Login Successful')</script>";
					echo "<script>window.location.href='ViewResultX.php'</script>";

				} elseif (decryptStringArray($row['password']) == $password && $row['Permission'] == "user") {
					setcookie('per',"user", time() + (86400 * 30), "/");
					setcookie('diu',"$account",time() + (86400 * 30), "/");
					echo "<script>alert('Login Successful')</script>";
					echo "<script>window.location.href='ViewResultX.php'</script>";			
				} elseif (decryptStringArray($row['password']) == $password && $row['Permission'] == "God") {
					setcookie('per',"God", time() + (86400 * 30), "/");
					setcookie('diu',"$account",time() + (86400 * 30), "/");
					echo "<script>alert('Login Successful')</script>";
					echo "<script>window.location.href='ViewResultX.php'</script>";		
				} else {
					echo "<script>alert('wrong password= =')</script>";	
				}
			}
		}
	}
	?>
	
	
</body>








</html>