<?php
	include ('connectsql.php');
		if (isset($_GET['username']) && isset($_GET['password']) && isset($_GET['P']) ) {
			$user = $_GET['username'];
			$pass = $_GET['password'];
			$per = $_GET['P'];
			
			if ($user == "" || $pass == "" || $per == "" ) {
			
		} else {
		$query = "Insert INTO userlist VALUES('$user','".encryptStringArray($pass)."','$per')";
		mysqli_query($db, $query);
	}	
	}

define('SALT', 'hehehe'); 
function encryptStringArray ($stringArray, $key = "fuckyouon9jai") {
 $s = strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), serialize($stringArray), MCRYPT_MODE_CBC, md5(md5($key)))), '+/=', '-_,');
 return $s;
}

$encryptedmessage = encryptStringArray("asdaacsasc"); 
		
	?>
