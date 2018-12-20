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

<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "Select * From takeaway,district where takeaway.twid = $id and takeaway.did = district.did";
	$result = mysqli_query($db,$query);
	$row = mysqli_fetch_assoc($result);
	$p1 = $row['photo1'];
	$p2 = $row['photo2'];
	$p3 = $row['photo3'];
	$p4 = $row['photo4'];
	$p5 = $row['photo5'];
	
	echo "<a> 名字: " . $row['name'] . "</a><br><br>";
	if ($row['tel'] <> '') {
		echo "<a> 電話: " . $row['tel'] . "</a><br><br>";
	}
	
	if ($row['address'] <> '') {
		echo "<a> 地址: " . $row['address'] . "</a><br><br>";
	}
	
	if ($row['description'] <> '') {
		echo "<a> 註解: " . $row['description'] . "</a><br><br>";
	}
	
	echo "<a> 地區: " . $row['dname'] . "＿" . $row['mainname'] . "</a><br><br>";
	echo "<a> 時間: " . explode("@",$row['time'])[0] . " 到 " . explode("@",$row['time'])[1] . "</a><br><br>";
	echo "<a> 食物種類: ";
	$counter = 0;
	$query1 = "Select * From takeawayfoodtype,foodtype where takeawayfoodtype.ftid = foodtype.ftid and takeawayfoodtype.twid = $id";
	$result1 = mysqli_query($db,$query1);
	while ($row1 = mysqli_fetch_assoc($result1)) {
		if ($counter <> 0) {
			echo "，".$row1['fname'] ;
		} else {
		echo $row1['fname'] . "";
		}
		$counter = $counter + 1;
	}
		echo "</a><br><br>";
	
		echo "<a> 拎走種類: ";
	$counter = 0;
	$query1 = "Select * From takeawaytype,type where takeawaytype.tid = type.tid and takeawaytype.twid = $id";
	$result1 = mysqli_query($db,$query1);
	while ($row1 = mysqli_fetch_assoc($result1)) {
		if ($counter <> 0) {
			echo "，".$row1['type'] ;
		} else {
		echo $row1['type'] . "";
		}
		$counter = $counter + 1;
	}
		echo "</a><br>";
		
		
		if ($p1 <> '') {
			
			echo "<img src='process/".$p1."' style='width:1000px; height:700px'></img>";
		} 
		
		if ($p2 <> '') {
			echo "<img src='process/".$p2."' style='width:1000px; height:700px'></img>";
			
		} 
		
		if ($p3 <> '') {
			echo "<img src='process/".$p3."' style='width:1000px; height:700px'></img>";
			
		} 
		
		if ($p4 <> '') {
			echo "<img src='process/".$p4."' style='width:1000px; height:700px'></img>";
			
		} 
		
		if ($p5 <> '') {
			echo "<img src='process/".$p5."' style='width:1000px; height:700px'></img>";
			
		} 
		
		
		$query = "Update takeaway set counter = counter + 1 where twid = $id";
		mysqli_query($db,$query);
		
		if (isset($_COOKIE['ac'])) {
			date_default_timezone_set('Asia/Hong_Kong');
			$uid = getuserid($_COOKIE['ac'],$db);
		$now = Date('Y-m-d H:i:s');
		$query = "Insert into history VALUES(DEFAULT,$uid,$id,'$now')";
		mysqli_query($db,$query);
		}
		
		
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