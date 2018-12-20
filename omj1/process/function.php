<?php
mysqli_set_charset($db, "utf8");
function getuserid($email,$db) {
	
	$query = "Select * From User where email = '".$email."'";
	$result = mysqli_query($db,$query);
	
	return mysqli_fetch_assoc($result)['userid'];
	
	
}


function gettakeawayid($db) {
	$query = "Select * From takeaway order by twid DESC LIMIT 1";
	$result = mysqli_query($db,$query);
	
	$counter = 1;
	$count = mysqli_num_rows($result);
	if ($count == 0) {
		
	} else {
		$counter = mysqli_fetch_assoc($result)['twid']+1;

	}
	return $counter;
}

function checkduplicatetakeaway($query,$db) {
	$result = mysqli_query($db,$query);
	
	if (mysqli_num_rows($result) > 0) {
		return true;
	} else {
		return false;
	}
}

function getdistrictid($text,$db) {
	
	$query = "Select * From District where mainname = '".$text."'";
	$result = mysqli_query($db,$query);
	
	return mysqli_fetch_assoc($result)['did'];
	
}

function getfoodtypeid($text,$db) {
	
	$query = "Select * From foodtype where fname = '".$text."'";
	$result = mysqli_query($db,$query);
	
	return mysqli_fetch_assoc($result)['ftid'];
	
}

function gettypeid($text,$db) {
	
	$query = "Select * From type where type = '".$text."'";
	$result = mysqli_query($db,$query);
	
	return mysqli_fetch_assoc($result)['tid'];
	
}



?>