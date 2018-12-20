<html>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
$db = mysqli_connect('localhost','root','','omj')
 or die('Error connecting to MySQL server.');
		
		
// end of type
mysqli_set_charset($db, "utf8");
$query = "Insert into type Values (DEFAULT,'外賣')";
mysqli_query($db,$query);
$query = "Insert into type Values (DEFAULT,'堂食')";
mysqli_query($db,$query);
$query = "Insert into type Values (DEFAULT,'到會服務')";
mysqli_query($db,$query);

//end of type

//種類
$query = "Insert into foodtype Values (DEFAULT,'中式')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'西式')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'日式')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'越式')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'韓式')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'泰式')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'粥')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'粉')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'麵')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'飯')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'糖水')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'飲料')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'素食')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'快餐')";
mysqli_query($db,$query);
$query = "Insert into foodtype Values (DEFAULT,'茶餐廳')";
mysqli_query($db,$query);


//end of 種類


			
			
			
?>
</body>
</html>