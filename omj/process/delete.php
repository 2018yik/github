<?php
include ('connectsql.php');
include ('function.php');

if(isset($_GET["id"])) {
	$twid = $_GET['id'];
		$query = "Delete From takeawayfoodtype where twid = $twid";
		mysqli_query($db,$query);
		
		$query = "Delete From takeawaytype where twid = $twid";
		mysqli_query($db,$query);
		
		$query = "Delete From history where twid = $twid";
		mysqli_query($db,$query);
		
		$query = "Delete From takeaway where twid = $twid";
		mysqli_query($db,$query);
		
		echo "<script>alert('Successful')</script>";
		echo "<script>window.location.href='/omj/Profile.php'</script>";
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>