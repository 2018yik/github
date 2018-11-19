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
echo "<form action='category.php' method='Post' accept-charset='UTF-8' enctype='multipart/form-data'>";
echo "<br>";
echo "<a>種類A</a>";
$query="Select * From type ";
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<input type='checkbox' name='type[]' value='".$row['type']."' style='zoom:2.5' ><a style='font-size:20px'>".$row['type']."</a>";
}

echo "<br><br><br><br>";

echo "<a>食物種類</a>";
$query="Select * From foodtype ";
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db,$query);
$counter = 0;
while ($row = mysqli_fetch_assoc($result)) {
	if ($counter %6 ==0) {
		echo "<br>";
	}
	echo "<input type='checkbox' name='foodtype[]' value='".$row['fname']."' style='zoom:2.5' ><a style='font-size:20px'>".$row['fname']."</a>";
	$counter = $counter +1;
}
echo "<br>";
echo "<input type='submit' name='submit' id='submit'></input>";
if (isset($_GET['ds'])) {
$ds = $_GET['ds'];

$query = '';
if ($ds == 'hot') {
$query = "Select * From takeaway order by counter DESC";
} else {
	$query = "Select * From takeaway,District where takeaway.did = District.did and District.mainname='".$ds."'";
}
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
}

function typetosqlstring($type) {
	$fullstring = '';
	if ($type == '') {
		return '';
	} else {
		for ($i = 0; $i < count($type); $i++) {
		$fullstring = $fullstring . " and type.type='".$type[$i]."'";
	}
		return $fullstring;
	}
}

function foodtypetosqlstring($type) {
	$fullstring = '';
	if ($type == '') {
		return '';
	} else {
		for ($i = 0; $i < count($type); $i++) {
		$fullstring = $fullstring . " and foodtype.fname='".$type[$i]."'";
	}
		return $fullstring;
	}
}

if (isset($_POST['submit'])) {
	$type = '';
	$foodtype ='';
	if (isset($_POST['type'])) {
		$type = $_POST['type'];
	}
	if (isset($_POST['foodtype'])) {
	$foodtype = $_POST['foodtype'];
	}
	$s1 = typetosqlstring($type);
	$s2 = foodtypetosqlstring($foodtype);
	if ($s1 <> '' and $s2 =='') {
			$query = "Select * From takeaway,takeawaytype,type where takeaway.twid = takeawaytype.twid and takeawaytype.tid = type.tid $s1";
	} else if ($s2 <> '' and $s1 == '') {
			$query = "Select * From takeaway,takeawayfoodtype,foodtype where takeaway.twid = takeawayfoodtype.twid and takeawayfoodtype.ftid = foodtype.ftid $s2";
	} else if ($s1 <> '' and $s2 <> '') {
	$query = "Select * From takeaway,takeawaytype,type,takeawayfoodtype,foodtype where takeaway.twid = takeawaytype.twid and takeawaytype.tid = type.tid and takeaway.twid = takeawayfoodtype.twid and takeawayfoodtype.ftid = foodtype.ftid $s1 $s2";
	}
	echo $query;
	



	
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