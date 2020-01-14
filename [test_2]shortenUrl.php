<?php
	require('connectDb.php');
?>
<form method="post" action="">
		<input type="text" name="url" placeholder="Paste your URL">
		<input type="submit" value="Shorten">
	</div>
</form>
<hr>
<?php
	if(isset($_POST['url'])){
		$url = $_POST['url'];
		$domain = "http://127.0.0.1/test/index.php?";
		function randomString($length=5){
			$character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$characterLength = strlen($character);
			$rndString = '';
			for ($i=0;$i<$length;$i++){
				$rndString .= $character[rand(0,$characterLength - 1)];
			}
			return $rndString;
		}
		$str = randomString();
		echo "<br> <b>check send url :</b> $url";
		echo "<br> <b>check generate string :</b> $str<br>";
		
		$sql = "INSERT INTO short (uri,link,status) VALUES ('$url','$str',true)";
		$result = mysqli_query($conn,$sql);
		
		echo "<br>".mysqli_error($conn);
		
		$sql2 = "SELECT * FROM short WHERE link= '$str' ";
		$result2 = mysqli_query($conn,$sql2);
		
		while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
			
			if ($link == $newUrl){
				$Url = $row['uri'];
			}
		}
		
		$newUrl = "$domain$str";
		echo "<br><b>Your Shorten Is : </b><a href='$Url'>$newUrl</a>";
		$link = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		echo "<br><b>URL Now is: </b>$link";

		
		/* 
		*/
	}else{ echo "error";}

	//if ($link=='http : //127.0.0.1/test/'.$)
?>
