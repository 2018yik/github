<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="script/loader.js"></script>
  <script type="text/javascript" src="script/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $('#district').on('change', function() {
	  var selectoption = document.getElementById('d1');
	  var a = ["中環,半山東,衛城,山頂,大學,堅摩,觀龍,西環,寶翠,石塘咀,西營盤,上環,東華,正街,水街","大嶼山,逸東,東涌新市鎮,愉景灣,坪洲及喜靈洲,南丫及蒲台,長洲南,長洲北","軒尼詩,愛群,鵝頸,銅鑼灣,大坑,渣甸山,樂活,跑馬地,司徒拔道,修頓,大佛口","太古城西,太古城東,鯉景灣,筲箕灣,愛秩序灣,阿公岩,杏花邨,翠灣,欣藍,小西灣,景怡,環翠,翡翠,柏架山,寶馬山, 天后,炮台山,維園,城市花園,和富,堡壘,錦屏,丹拿,健康村,鰂魚涌,南豐,康怡,康山,興東,西灣河,下耀東,上耀東,興民,樂康,翠德,漁灣,佳曉","香港仔,鴨脷洲邨,鴨脷洲北,利東一,利東二,海怡東,海怡西,華貴,華富一,華富二,薄扶林,置富,田灣,香漁,黃竹坑,海灣,赤柱及石澳","尖炒咀西,尖炒咀北,佐敦,油麻地,富榮,旺角西,富柏,櫻桃,大角咀,詩歌舞,大南,旺角北,旺角東,旺角南,京士柏,尖沙咀東","寶麗,長沙灣,南昌北,南昌東,南昌南,南昌中,南昌西,富昌,麗閣,元州,荔枝角,美孚南,美孚中,美孚北,龍坪,蘇屋,李鄭屋,白田,大坑東及又一村,南山,石硤尾","馬頭圍,馬坑涌,馬頭角,樂民,常樂,何文田,嘉道理,太子,九龍塘,龍城,啓德,海心,土瓜灣北,土瓜灣南,鶴園海逸,黃埔東,黃埔西,紅磡灣,紅磡,家維,愛民,愛俊","龍趣,龍啓,龍上,鳳凰,鳳德,龍星,新蒲崗,東頭,東美,樂富,橫頭磡,天強,翠竹及鵬程,竹園南,竹園北,慈雲西,正愛,正安,慈雲東,瓊富,彩雲東,彩雲南,彩雲西,池彩,彩虹","觀塘中心,九龍灣,啓業,麗晶,坪石,佐敦谷,順天,雙順,利安天,寶達,秀茂坪北,曉麗,秀茂坪南,興田,德田,藍田,廣德,平田,康栢,油塘四山東,油塘四山西,麗港,景田,翠屏南,翠屏北,寶樂,月華,協康,康樂,定安,牛頭角,淘大,樂華北,樂華南","西頁市中心,白沙灣,西頁離島,坑口東,坑口西,環保,將軍澳市中心,健彩,翠林,康景,寶林,欣英,運享,景林,厚德,富裕,德明,寶康,尚德,廣明","沙田市中心,瀝源,禾輋邨,第一城,愉城,王屋,沙角,博康,乙明,秦豐,新田圍,翠田,顯嘉,美田,徑口,田心,新翠,大圍,松城,穗禾,火炭,駿馬,頌安,錦濤,新港城,利安,富龍,錦英,耀安,恒安,鞍泰,大水坑,愉欣,碧湖,廣康,廣源","大埔墟,大埔中,頌汀,大元,富亨,怡富,富明新,廣福,宏福,大埔滘,運頭塘,新富,林村谷,寶雅,太和,舊墟及太湖,康樂園,船灣,西貢北","聯和墟,粉嶺市,祥華,華都,華明,欣盛,嘉福,上水鄉郊,彩旭太,彩園,石湖墟,天平西,鳳翠,沙打,天平東,皇后山","豐年,水邊,南屏,北朗,大橋,鳳翔,十八鄉北,十八鄉南,屏山南,屏山北,廈村,天盛,瑞愛,瑞華,頌華,悅恩,富恩,逸澤,天恒,宏逸,嘉湖北,嘉湖南,天耀,慈祐,錦綉花園,新田,錦田,八鄉北,八鄉南","德華,楊屋道,海濱,祈德尊,福來,愉景,荃灣中心,荃威,麗濤,麗興,荃灣郊區西,荃灣郊區東,綠楊,梨木樹東,梨木樹西,石圍角,象石","葵興,葵盛東邨,上大窩口,下大窩口,葵涌邨,石蔭,安蔭,新石籬,石籬,大白田,葵芳,麗瑤,荔華,祖堯,興芳,荔景,葵盛西邨,安灝,偉盈,青衣邨,翠怡,長青,長康,盛康,青衣南,長亨,青發,長安","屯門市中心,兆置,兆翠,安定,友愛南,友愛北,翠興,山景,景興,興澤,新墟,三聖,恆福,兆新,悅湖,兆禧,湖景,蝴蝶,樂翠,龍門,新景,良景,田景,寶田,建生,兆康,景峰,富泰,屯門鄉郊"];
	selectoption.innerText = null;
	var number = $(this).val();
	var opt = document.createElement('option');
	var fullarray = a[number].split(",");
	for (i =0; i < fullarray.length; i++) {
		var option = document.createElement("option");
		option.value = fullarray[i];
		option.text = fullarray[i];
		selectoption.add(option);
		
		
	}
	
	
  })
})
  
  
  
  </script>
<body>
<?php
require('header.php');

?>
<div class='center'>
<?php

if (isset($_COOKIE['role'])) {
	require('process/connectsql.php');
	?>
<form action='process/insertdata.php' method='Post' accept-charset="UTF-8" enctype="multipart/form-data">
<label style='color:red'>圖最少要有1張 名字必填 checkbox一定要最少各1 時間唔可以--:-- 其他可不填</label>
<label>Name</label><input type='text' name='name' id='name'></input><br>
<label>tel</label><input type='text' name='tel' id='tel'></input><br>
<label>Photo1</label><input type='file' name='photo1' id='photo1'></input><br>
<label>Photo2</label><input type='file' name='photo2' id='photo2'></input><br>
<label>Photo3</label><input type='file' name='photo3' id='photo3'></input><br>
<label>Photo4</label><input type='file' name='photo4' id='photo4'></input><br>
<label>Photo5</label><input type='file' name='photo5' id='photo5'></input><br>
<label>Start Time</label><input type='time' name='stime' id='stime' value='00:00'></input><br>
<label>End Time</label><input type='time' name='etime' id='etime' value='23:59'></input><br>
<label>Address</label><input type='text' name='address' id='address'></input><br>
<label>description</label><input type='text' name='description' id='description'></input><br>

<label>地區</label>
<select id='district' name='district'>
<?php
$darray = array("中西區","離島","灣仔","東區","南區","油尖旺","深水埗","九龍城","黃大仙","觀塘","西貢","沙田","大埔","北區","元朗","荃灣","葵青","屯門");
for ($i = 0; $i < count($darray); $i++) {
	echo "<option value='$i'>".$darray[$i]."</option>";
}

?>
</select>
<select id='d1' name='d1'>
<?php
$darray = array("中環","半山東","衛城","山頂","大學","堅摩","觀龍","西環","寶翠","石塘咀","西營盤","上環","東華","正街","水街");
for ($i = 0; $i < count($darray); $i++) {
	echo "<option value='".$darray[$i]."'>".$darray[$i]."</option>";
}

?>

</select>
<br>
<a>種類A</a>
<?php
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



?>
<label>X</label><input type='text' name='X' id='X' value='0'></input><br>
<label>Y</label><input type='text' name='Y' id='Y' value='0'></input><br>






<input type='submit' name='submit' id='submit'></input>
</form>

<?php
}
?>


</div>

<?php
require('footer.php');
?>
</body>
</html>