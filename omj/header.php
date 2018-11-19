<?php
include('connectsql.php');
mysqli_set_charset($db, "utf8");
echo "<div class='headertext'>";
if (isset($_COOKIE['role'])) {
	$role = $_COOKIE['role'];
	$ac = $_COOKIE['ac'];
	if ($role == 'admin') {
		echo "<a class='right'>Welcome " . $ac . "</a><a class='right'>／</a><a class='right' href='Deletetakeaway.php>Delete Takeaway</a>";
	} else if ($role == 'user') {
		
		echo "<a class='right' href='process/Logout.php'>Logout</a><a class='right'>／</a><a class='right' href='Insert.php'>Insert</a><a class='right'>／</a><a class='right' href='Profile.php'>Profile</a><a class='right'>／</a><a class='right'>Welcome " . $ac . "</a>";
	}
} else {
	echo "<a class='right' href='register.php'>Register</a><a class='right'>／</a><a class='right' href='login.php'>Login</a>";
}
echo "<img src='images/header.png'></img>";
?>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <?php
	
	$districtarray = array("香港","九龍","新界");
	$hk = array("中西區","灣仔區","東區","南區");
	$kw = array("油尖旺區","深水埗區","九龍城區","黃大仙區","觀塘區");
	$nt = array("葵青區","荃灣區","屯門區","元朗區","北區","大埔區","沙田區","西貢區","離島區");
	
	
	for ($i = 0; $i < count($districtarray); $i++) {
		if ($districtarray[$i] == "香港") {
			echo "<li class='active has-sub'><a href='#'><span>香港</span></a>";
			echo "<ul>";
			
			for ($j = 0; $j < count($hk); $j++) {
				echo "<li class='has-sub'><a href='#'><span>$hk[$j]</span></a><ul>";
				$query = "Select * From district where dname = '$hk[$j]'";
				$result = mysqli_query($db,$query);
				while ($row = mysqli_fetch_assoc($result)) {
				
				echo "<li><a href='category.php?ds=".$row['mainname']."'><span>".$row['mainname']."</span></a></li>";
			
				}
				echo "</ul></li>";
			}
			echo "</ul></li>";
			
		} else if ($districtarray[$i] == "九龍") {
				echo "<li class='active has-sub'><a href='#'><span>九龍</span></a>";
			echo "<ul>";
			
			for ($j = 0; $j < count($kw); $j++) {
				echo "<li class='has-sub'><a href='#'><span>$kw[$j]</span></a><ul>";
				$query = "Select * From district where dname = '$kw[$j]'";
				$result = mysqli_query($db,$query);
				while ($row = mysqli_fetch_assoc($result)) {
				
				echo "<li><a href='category.php?ds=".$row['mainname']."'><span>".$row['mainname']."</span></a></li>";
			
				}
				echo "</ul></li>";
			}
			echo "</ul></li>";
			
		} else if ($districtarray[$i] == "新界") {
				echo "<li class='active has-sub'><a href='#'><span>新界</span></a>";
			echo "<ul>";
			
			for ($j = 0; $j < count($nt); $j++) {
				echo "<li class='has-sub'><a href='#'><span>$nt[$j]</span></a><ul>";
				$query = "Select * From district where dname = '$nt[$j]'";
				$result = mysqli_query($db,$query);
				while ($row = mysqli_fetch_assoc($result)) {
				
				echo "<li><a href='category.php?ds=".$row['mainname']."'><span>".$row['mainname']."</span></a></li>";
			
				}
				echo "</ul></li>";
			}
			echo "</ul></li>";
			
		}
		
	}
	
	
	echo "<li><a href='category.php?ds=hot'><span>熱門點擊率</span></a></li>";
	
	
	
   
   ?>
   
   
   
   
</ul>
</div>
<?php
echo "</div>";


?>