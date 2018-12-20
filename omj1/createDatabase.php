<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
$db = mysqli_connect('localhost','root','','omj')
 or die('Error connecting to MySQL server.');
$query = "Create Table User (
		 userid int(10) NOT NULL AUTO_INCREMENT,
		 email varchar(100) NOT NULL,
		 password varchar(100) not null,
		 role varchar(100) not null,
		 PRIMARY KEY(userid)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
mysqli_query($db, $query) or die('Error querying database.');

$query = "Create Table District (
		   did int(10) not null auto_increment,
		   dname varchar(100) not null ,
		   mainname varchar(100) not null,
		   Primary key(did)) Engine=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
		   mysqli_query($db,$query) or die('Error querying database.');

$query = "Create Table takeaway (
		   twid int(10) NOT NULL AUTO_INCREMENT,
		   userid int(10) NOT NULL,
		   did int(10) not null,
		   name varchar(1000),
		   tel varchar(100),
		   photo1 varchar(1000) ,
		   photo2 varchar(1000) ,
		   photo3 varchar(1000) ,
		   photo4 varchar(1000) ,
		   photo5 varchar(1000) ,
		   time varchar(100),
		   insertdate varchar(100) not null,
		   updatedate varchar(100) not null,
		   address varchar(1000),
		   description varchar(1000),
		   counter int(100) not null,
		   X varchar(100) not null,
		   Y varchar(100) not null,
		   state varchar(1) not null,
		   
		   PRIMARY KEY (twid),
		   FOREIGN KEY (userid) REFERENCES User(userid),
		   Foreign KEY (did) REFERENCES District(did)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

		   mysqli_query($db, $query) or die('Error querying database.');

		   
		   
		   
$query = "Create table type (
		 
			tid int(10) not null auto_increment,
			type varchar(100) not null,
			Primary key(tid)) Engine=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
			
			mysqli_query($db,$query) or die('Error querying database.');
		

$query = "Create Table takeawaytype (
			twtid int(10) not null auto_increment,
			twid int(10) not null,
			tid int(10) not null,
			PRIMARY KEY(twtid),
			Foreign key(twid) REFERENCES takeaway(twid),
			Foreign key(tid) REFERENCES type(tid)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
			mysqli_query($db,$query) or die('Error querying database.');
		   
$query = "Create table foodtype (
			ftid int(10) not null auto_increment,
			fname varchar(100) not null,
			Primary key(ftid)) engine=innodb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
			mysqli_query($db,$query) or die('Error querying database.');
			
			
$query = "Create table takeawayfoodtype(
			taftid int(10) not null auto_increment,
			ftid int(10) not null,
			twid int(10) not null,
			Primary key(taftid),
			Foreign key(ftid) REFERENCES foodtype(ftid),
			Foreign key(twid) REFERENCES takeaway(twid)) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
			mysqli_query($db,$query) or die('Error querying database.');

$query = "Create table history (
			hid int(10) not null auto_increment,
			userid int(10) not null,
			twid int(10) not null,
			Date VARCHAR(100) NOT NULL,
			Primary key(hid),
			Foreign key(userid) REFERENCES User(userid),
			Foreign key(twid) REFERENCES takeaway(twid)) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
			mysqli_query($db,$query) or die('Error querying database.');



		
				
			
// $query = "Insert into District Values (DEFAULT,'中西區','中環')";
// mysqli_set_charset($db, "utf8");
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'中西區','半山區')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'中西區','西營盤')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'中西區','上環')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'中西區','堅尼地城')";
// mysqli_query($db,$query);
			
// //end part1

// // start part2
// $query = "Insert into District Values (DEFAULT,'灣仔區','灣仔')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'灣仔區','跑馬地')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'灣仔區','銅鑼灣西')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'灣仔區','大坑')";
// mysqli_query($db,$query);


// //end of part2
// //start of part3
// $query = "Insert into District Values (DEFAULT,'東區','銅鑼灣東')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'東區','北角')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'東區','鰂魚涌')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'東區','筲箕灣')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'東區','柴灣')";
// mysqli_query($db,$query);
// //end of part3
// //start of part4
// $query = "Insert into District Values (DEFAULT,'油尖旺區','旺角')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'油尖旺區','油麻地')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'油尖旺區','尖沙咀')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'油尖旺區','大角咀')";
// mysqli_query($db,$query);
// //end of part4


// //start of part5 
// $query = "Insert into District Values (DEFAULT,'九龍城區','紅磡')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'九龍城區','九龍塘')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'九龍城區','土瓜灣')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'九龍城區','何文田')";
// mysqli_query($db,$query);
// //end of part5
// //start of part6
// $query = "Insert into District Values (DEFAULT,'元朗區','元朗市')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'元朗區','天水圍')";
// mysqli_query($db,$query);
// $query = "Insert into District Values (DEFAULT,'元朗區','元朗鄉郊')";
// mysqli_query($db,$query);
// //end of part6



			
			
			
?>
</body>
</html>