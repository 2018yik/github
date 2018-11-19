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
$query = "select * From history,user,takeaway where history.userid = user.userid and history.twid = takeaway.twid and history.userid = $uid order by history.hid DESC";
$result = mysqli_query($db,$query);
while ($row=mysqli_fetch_assoc($result)) {
	echo "<tr><th>".$row['name']."</th><th>".$row['Date']."</th></tr>";	
}


?>


</table>


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