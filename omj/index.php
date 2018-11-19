<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php
include('header.php');
?>
<div class='center'>
<?php

$query = "Select * From takeaway order by counter DESC";
$result = mysqli_query($db,$query);
$counter = 0;
while ($row = mysqli_fetch_assoc($result)) {
	if ($counter ==0) {
		echo "<div class='wrap'>";
	}
if ($counter % 2 == 0 AND $counter != 0) {
	echo "</div>";
	echo "<br>";
	echo "<div class='wrap'>";
}
	echo "<img src='process/".$row['photo1']." ' onclick=funclick('".$row['twid']."')></img>";
	if ($counter % 2 == 0) {
	echo "<a style='float:left'>".$row['name']."</a>";
	} else {
		echo "<a style='float:right'>".$row['name']."</a>";
	}
	$counter = $counter + 1;
}
?>
</div>
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