<?php
include ('connectsql.php');
include ('function.php');
function uploadfile($name,$dir,$index,$tempfile) {
	if ($name == '') {
		return '';
	} else {
		$target_file = $dir . $name;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		$newname = $dir . "" . date("YmdHis")."p".$index . "." . $imageFileType;
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		return '';
		} else {
			 if (move_uploaded_file($tempfile, $newname)) {
				 return $newname;
				} else {
		return '';
    }
}
	}
}
if(isset($_POST["submit"])) {
	
	$target_dir = "uploads/";
	$p1 = $_FILES['photo1']["name"];
	$p2 = $_FILES['photo2']["name"];
	$p3 = $_FILES['photo3']["name"];
	$p4 = $_FILES['photo4']["name"];
	$p5 = $_FILES['photo5']["name"];
	
	
	$temp1 = $_FILES['photo1']["tmp_name"];
	$temp2 = $_FILES['photo2']["tmp_name"];
	$temp3 = $_FILES['photo3']["tmp_name"];
	$temp4 = $_FILES['photo4']["tmp_name"];
	$temp5 = $_FILES['photo5']["tmp_name"];
	
	$finalp1 = uploadfile($p1,$target_dir,1,$temp1);
	$finalp2 = uploadfile($p2,$target_dir,2,$temp2);
	$finalp3 = uploadfile($p3,$target_dir,3,$temp3);
	$finalp4 = uploadfile($p4,$target_dir,4,$temp4);
	$finalp5 = uploadfile($p5,$target_dir,5,$temp5);
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
	if (isset($_POST['type'])) {
		$type = $_POST['type'];
	}
	if (isset($_POST['foodtype'])) {
	$foodtype = $_POST['foodtype'];
	}
	
	if ($name == '') {
		echo "<script>alert('name null')</script>";
		echo "<script>window.location.href='/omj/insert.php'</script>";
	} else if ($finalp1 == '' && $finalp2 == '' && $finalp3 == '' && $finalp4 == '' && $finalp5 == '') {
		echo "<script>alert('At least 1 photo , correct image format ')</script>";
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
		
		$checker = checkduplicatetakeaway("Select * From takeaway,district where takeaway.did = district.did and takeaway.name = '$name' and district.mainname = '$d1'",$db);
		if ($checker == true) {
			echo "<script>alert('This data is already stay in the database')</script>";
		echo "<script>window.location.href='/omj/insert.php'</script>";
		} else {
			$query = "Insert into takeaway VALUES($maxid,$userid,$did,'$name','$tel','$finalp1','$finalp2','$finalp3','$finalp4','$finalp5','".$stime."@".$etime."','".date('Y-m-d H:i:s') . "','" . date('Y-m-d H:i:s') . "','$address','$description',0,'$X','$Y','T')";
			mysqli_query($db,$query);
			
			for ($i = 0; $i < count($type); $i++) {
				$tid = gettypeid($type[$i],$db);
				$query = "Insert into takeawaytype VALUES(DEFAULT,$maxid,$tid)";
				mysqli_query($db,$query);
				
			}
			
			for ($i = 0; $i < count($foodtype); $i++) {
				$tid = getfoodtypeid($foodtype[$i],$db);
				$query = "Insert into takeawayfoodtype VALUES(DEFAULT,$tid,$maxid)";
				mysqli_query($db,$query);			
			}
			
			echo "<script>alert('Successful')</script>";
		echo "<script>window.location.href='/omj/insert.php'</script>";
			
			
		}
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>