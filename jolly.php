<?php

//BIMAGATES
//PRIVX
//SGBTEAM
//BIMAGANTENG
//COPYRIGHT BIMA 2018

// SETTINGS

$suntik = "50"; // LIMIT SUNTIK

error_reporting(0);
date_default_timezone_get("Asia/Jakarta");
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}

if($_GET['mode'] == 1){
	if(empty($_GET['uid']) && empty($_GET['utoken'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userId'<br>2. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}elseif(empty($_GET['uid'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}elseif(empty($_GET['utoken'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}else{
		$result = file_get_contents("http://h5server.jollychic.com/active/sheepFeed/getMainInfo.do?callback=topicCallback1533920992015&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533918465777&cookieId=abe54fff-2f52-45f0-a269-bcb6b45a1aaf&userId=".$_GET['uid']."&userToken=".$_GET['utoken']."&token=EsgsyC%2FQfZLWVvALjbDY2tOnok3h%2Bl%2FnM6TA%2F2qyCriZ5%2BdNKzFaeAQQ&_=1533920990125");
		echo "uid: ".$_GET['uid']." - utoken: ".$_GET['utoken']."<br><br>";

		if(strpos($result,'foodQuantity')){
		  echo 'Jumlah Pakan: '.getStr($result,'"foodQuantity":',',').'<br>';
			echo 'Nama Ternak: '.getStr($result,'"sheepName":"','"').'<br><br>';
			echo '<a href="jolly.php"><font color="blue">back</font></a>';
		}else {
		  echo $result;
		}
	}
}elseif($_GET['mode'] == 2){
	if(empty($_GET['uid']) && empty($_GET['utoken'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userId'<br>2. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}elseif(empty($_GET['uid'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}elseif(empty($_GET['utoken'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}else{
		$rezult = file_get_contents("http://h5server.jollychic.com/active/sheepFeed/showFoodTakenInfo.do?callback=topicCallback1533924907655&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533918465777&cookieId=abe54fff-2f52-45f0-a269-bcb6b45a1aaf&userId=".$_GET['uid']."&userToken=".$_GET['utoken']."&token=EsgsyC%2FQfZLWVvALjbDY2tOnok3h%2Bl%2FnM6TA%2F2qyCriZ5%2BdNKzFaeAQQ&_=1533924306659");
		$edtionCatId = getStr($rezult,'"edtionCatId":',',');
		$randType = rand(1,999999999);
		$result = file_get_contents("http://h5server.jollychic.com/active/sheepFeed/getFood.do?callback=topicCallback1533922150215&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533918465777&cookieId=abe54fff-2f52-45f0-a269-bcb6b45a1aaf&userId=".$_GET['uid']."&userToken=".$_GET['utoken']."&token=EsgsyC%2FQfZLWVvALjbDY2tOnok3h%2Bl%2FnM6TA%2F2qyCriZ5%2BdNKzFaeAQQ&type=".$randType."&edtionCatId=".$edtionCatId."&_=1533922105897");
		echo "uid: ".$_GET['uid']." - utoken: ".$_GET['utoken']." - type: ".$randType." - edtionCatId: ".$edtionCatId."<br><br>";

		if(strpos($result,'foodQuantity')){
		  $pakan = getStr($result,'"foodQuantity":',',');
		    if($pakan < $suntik){
		      echo '<meta http-equiv="refresh" content="1">';
		      echo "Jumlah Pakan: ".getStr($result,'"foodQuantity":',',').'';
		    }else{
		      echo '<script type="text/javascript">alert("STOP! THE LIMIT IS 50");</script>';
		      echo "Jumlah Pakan: ".getStr($result,'"foodQuantity":',',')."<br><br>";
					echo '<a href="jolly.php"><font color="blue">back</font></a>';
		    }
		}else {
		  echo $result;
		}
	}
}elseif($_GET['mode'] == 3){
	if(empty($_GET['uid']) && empty($_GET['utoken'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userId'<br>2. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}elseif(empty($_GET['uid'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}elseif(empty($_GET['utoken'])){
		echo "<font color=red>PLEASE INPUT THE FOLLOWING REQUEST</font><br>1. 'userToken'<br><br>";
		echo '<a href="jolly.php"><font color="blue">back</font></a>';
	}else{
		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://h5server.jollychic.com/active/sheepFeed/feed.do?callback=topicCallback1533920998708&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533918465777&cookieId=abe54fff-2f52-45f0-a269-bcb6b45a1aaf&userId=".$_GET['uid']."&userToken=".$_GET['utoken']."&token=EsgsyC%2FQfZLWVvALjbDY2tOnok3h%2Bl%2FnM6TA%2F2qyCriZ5%2BdNKzFaeAQQ&_=1533920990126");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

		$headers = array();
		$headers[] = "Accept-Encoding: gzip, deflate";
		$headers[] = "Accept-Language: en-US,en;q=0.9";
		$headers[] = "Upgrade-Insecure-Requests: 1";
		$headers[] = "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36";
		$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
		$headers[] = "Cache-Control: max-age=0";
		$headers[] = "Cookie: __cfduid=db5c4f8dc2bdf177891abed47e903477f1533907843; Ucart=34498b604c67a093646cd9f94cf6d0f5; Users=a9a1208d69d4d296b7330ec1cfbf6559; BI_Cart=15339078434220; AffiliateUsers=368c922bfdfcbafe8617eaadbd4d55c8; jollychiccode=SA; jollychictopsalecode=ID; jollychiczoneip=1; P_fsw=SA%7C100.00; P_fswf=Saudi+Arabia%7C100.00; effectiveness=%7B%22min_goods_amount%22%3A%220.00%22%2C%22max_goods_amount%22%3A%22100.00%22%2C%22shipping_fee%22%3A%2220.00%22%2C%22shipping_fee_standard%22%3A%220.00%22%2C%22shipping_area_id%22%3A%2250%22%2C%22effectiveness%22%3A%227-10%22%2C%22effectiveness_standard%22%3A%220%22%2C%22countryCode%22%3A%22SA%22%7D; countrySizeType=%7B%22size_type%22%3A0%2C%22size_type_name%22%3A%22%22%7D; LANG_NAME=id; LANG_CODE=12; __bi_recommend=ae3af6b881557889; user_age=%7B%22userAge%22%3A5%2C%22weight%22%3A2%7D; lc_sso8888164=1533908174287; __lc.visitor_id.8888164=S1533908173.1d2bee04c2; lc_window_state=minimized; discountValue=0; _lastuser_=YmltYWdhdGVzOEBnbWFpbC5jb20%3D; Ucart_gift=8d0f9c301608f4e957435097cd423fd8; __utma=87904387.325509201.1533910574.1533910574.1533910574.1; __utmc=87904387; __utmz=87904387.1533910574.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); do=id.jollychic.com; __zysrc=%28none%29%7C%28direct%29%7C%7C%7C%28not%20set%29%7C%7C%7C%7B%22userAge%22%3A5%2C%22weight%22%3A2%7D%7C%7C%7C%7C%7C%7C; __zyrsrc=%28none%29%7C%28direct%29%7C%7C%7C%28not%20set%29%7C%7C%7C%7B%22userAge%22%3A5%2C%22weight%22%3A2%7D%7C%7C%7C%7C%7C%7C; __zycid=e49f0f218b91bd9a; __zybid=958822396a83ab33; _ga=GA1.2.325509201.1533910574; _gid=GA1.2.1785164185.1533910579; cto_lwid=bae8490b-54ca-42b2-8d95-ead066e10e00; _xc_cs=idr; ischangecurrency=1; __zypvid=10e7a4b927f0f5fec1b2fc00bc8e3ce4";
		$headers[] = "Connection: keep-alive";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		$growthValue = getStr($result,'"growthValue":',',');
		echo "uid: ".$_GET['uid']." - utoken: ".$_GET['utoken']."<br><br>";

		if(strpos($result,'growthValue')){
			$pakan = getStr($result,'"leftFoodQuantity":',',');
			$shnam = getStr($result,'"sheepName":"','"');
				if(strpos($result,'"isGrownUp":0,')){
					echo '<meta http-equiv="refresh" content="1">';
					echo "Growth: ".$growthValue.'/10<br>';
					echo "left Pakan: ".$pakan;
				}elseif(strpos($result,'"isGrownUp":1,')){
					echo '<meta http-equiv="refresh" content="1">';
					echo "Growth: ".$growthValue.'/10<br>';
					echo "left Pakan: ".$pakan.'<br>';
					echo "Sheep Name: ".$shnam;
				}elseif(strpos($result,'System is busy, please try again')){
					echo '<script type="text/javascript">alert("WAIT! SYSTEM IS BUSY");</script>';
				}elseif(strpos($result,'have food to feed up the sheep')){
					echo '<meta http-equiv="refresh" content="5">';
				}else{
					echo '<script type="text/javascript">alert("STOP! THE LIMIT IS 50");</script>';
					echo $result."<br><br>";
					echo '<a href="jolly.php"><font color="blue">back</font></a>';
				}
		}else {
			echo $result;
		}
	}
}else{
	echo
	'
	<form action="jolly.php" method="get">
		mode: <select id="mode" name="mode">
			<option>-- Select --</option>
			<option value="1">Find Account</option>
			<option value="2">Inject Pakan</option>
			<option value="3">Auto Feed</option>
		</select><br>
		userId: <input type="text" name="uid" value="" size="7"><br>
		userToken: <input type="text" name="utoken" value="" size="21"><br>
		<input type="submit" value="Submit">
	</form>

  <p>LIMIT SUNTIK IS '.$suntik.'. To change, please edit this script</p>
	<p>Click on the submit button, and the input will be sent to a page on the server called "/jolly.php".</p>';
}
