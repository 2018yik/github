<html>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
$db = mysqli_connect('localhost','root','','omj')
 or die('Error connecting to MySQL server.');
		
		
// end of type
mysqli_set_charset($db, "utf8");

$file = fopen("18city.txt","r");
while (($line = fgets($file)) !== false) {
		$distinct = explode("@",$line)[0];
		$darray = explode(",",explode("@",$line)[1]);
		
		for ($i = 0; $i < count($darray); $i++) {
			$query = "Insert Into District VALUES(DEFAULT,'$distinct','$darray[$i]')";
			mysqli_query($db,$query);
			
			
		}
    }


//end of 種類


			
			
			
?>
</body>
</html>