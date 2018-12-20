<?php
include ('connectsql.php');
include ('function.php');

if(isset($_POST["submit"])) {
	
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$stime = $_POST['stime'];
	$etime	= $_POST['etime'];
	$address = $_POST['address'];
	$description = $_POST['description'];
	$d1 = $_POST['d1'];
	$X= $_POST['X'];
	$Y = $_POST['Y'];
	$type = '';
	$foodtype = '';
	$twid = $_POST['twida'];
	if (isset($_POST['type'])) {
		$type = $_POST['type'];
	}
	if (isset($_POST['foodtype'])) {
	$foodtype = $_POST['foodtype'];
	}
	
	if ($name == '') {
		echo "<script>alert('name null')</script>";
		echo "<script>window.location.href='/omj/insert.php'</script>";
	}	else if ($stime == '' || $etime == '') {
		echo "<script>alert('time problem')</script>";
	echo "<script>window.location.href='/omj/insert.php'</script>";
	} else if ($type == '' || $foodtype == '') {
		echo "<script>alert('At least select 1type of type and foodtype')</script>";
		echo "<script>window.location.href='/omj/insert.php'</script>";
	} else {
		$userid = getuserid($_COOKIE['ac'],$db);
		$maxid = gettakeawayid($db);
		$did = getdistrictid($d1,$db);
		
		$checker = checkduplicatetakeaway("Select * From takeaway where twid = $twid",$db);
		if ($checker == true) {
			$query = "Update takeaway SET did = $did, name = '$name',tel = '$tel',time = '".$stime."@".$etime."', updatedate = '" . date('Y-m-d H:i:s') . "',address = '$address',description = '$description' Where twid = $twid";
			mysqli_query($db,$query);
			
			$query = "Delete From takeawaytype where twid = $twid";
			mysqli_query($db,$query);
			
			for ($i = 0; $i < count($type); $i++) {
				$tid = gettypeid($type[$i],$db);
				$query = "Insert into takeawaytype VALUES(DEFAULT,$twid,$tid)";
				mysqli_query($db,$query);
				
			}
			
			$query = "Delete From takeawayfoodtype where twid = $twid";
			mysqli_query($db,$query);
			
			for ($i = 0; $i < count($foodtype); $i++) {
				$tid = getfoodtypeid($foodtype[$i],$db);
				$query = "Insert into takeawayfoodtype VALUES(DEFAULT,$tid,$twid)";
				mysqli_query($db,$query);			
			}
			
			echo "<script>alert('Successful')</script>";
			echo "<script>window.location.href='/omj/Profile.php'</script>";
		
		} else {
			echo "<script>alert('No data stay in the database')</script>";
			echo "<script>window.location.href='/omj/Profile.php'</script>";
			
			
			
		}
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>