<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php
include('header.php');
include('process/function.php');
?>
<div class='center'>
<a>UPDATE既 遲D先</a>
<br>
<a>舊紀錄</a>
<table border='1' class='fixed3'><tr><th>Name</th><th>Date</th></tr>
<?php
$uid = getuserid($_COOKIE['ac'],$db);
$query = "Select * From user where userid = $uid";
$result = mysqli_query($db,$query);
$role = mysqli_fetch_assoc($result)['role'];

$query = "select * From history,user,takeaway where history.userid = user.userid and history.twid = takeaway.twid and history.userid = $uid order by history.hid DESC";
$result = mysqli_query($db,$query);
while ($row=mysqli_fetch_assoc($result)) {
	$id = $row['twid'];
	echo "<tr><th><a href='takeaway?id=".$id."'>".$row['name']."</a></th><th>".$row['Date']."</th></tr>";	
}
?>


</table><br><br><br>








<table border='1' class='fixed3'><tr><th>Name</th><th>InsertDate</th><th>Action</th>
<?php
$query = "Select * From user,takeaway where takeaway.userid = user.userid and takeaway.userid = $uid Order by takeaway.twid";

$result = mysqli_query($db,$query);

while($row = mysqli_fetch_assoc($result)) {
	
		$twid = $row['twid'];
		
		echo "<tr><th>".$row['name']."</th><th>".$row['insertdate']."</th><th><a href='update?id=".$twid."'>Update</a></th></tr>";
	
	
}
echo "</table>";

?>
</table><br><br><br><br>

<?php
if ($role == 'admin') {
?>
<table border='1' class='fixed3'><tr><th>Name</th><th>InsertDate</th><th>Action</th>
<?php
$query = "Select * From takeaway Order by takeaway.twid";

$result = mysqli_query($db,$query);

while($row = mysqli_fetch_assoc($result)) {
	
		$twid = $row['twid'];
		
		echo "<tr><th>".$row['name']."</th><th>".$row['insertdate']."</th><th><a href='process/delete.php?id=".$twid."'>Delete</a></th></tr>";
	
	
}
echo "</table>";

?>
</table>
<?php
}
?>


</div>

<?php
include('footer.php');
?>

<script>
function funclick(id) {
    window.location.href = "takeaway?id=" + id.toString();
}
</script>
</body>
</html>