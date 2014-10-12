<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<meta charset="UTF-8" />
	<title>Find new Followers!</title>
	
<!--<script type="text/javascript">
/*	function doSomething() {
		var blogname = "";
		blogname = document.getElementById("myField").value;
		alert(blogname);
	}*/
</script>-->

<?php
// Create connection
//$con=mysqli_connect("localhost","root","toor","tumblrrecommender");
//if (TRUE) {
//	$strurl = $_POST['clienturl'];
	//mysqli_query($con,"INSERT INTO 'queries'('latestclient') VALUES ($strurl)");
	
//}

// Check connection

?>
</head>
<body>
<div class="main">
	<div class="header">
		<div>
			<form method="post">
				<input id="myField" type="text" name="clienturl" placeholder="Enter my blog name">
				<input name="btn" onclick="doSomething" type="submit" value="GO">
			</form>
			<button type="button" onclick="doSomething()">go</button>
			<p id="editable"></p>
		</div>
	</div>
	<div class="main">
		<div class="left">
			<?php 
			for ($x=0; $x<=10; $x++) {
				echo "<div class=\"cell\"><img src=\"./images/blog.png\"/><a id=\"link\" href=\"#\">";
				echo $x;
				echo "</a></div>";
				
				} 
			echo $timestamp=time();
			?>
			<div class="cell"><img src="./images/blog.png"/><a id="link" href="#">1</a></div>
			<div class="cell"><img src="./images/blog.png"/><a id="link2" href="#">2</a>
			<?php
			// Create connection
			//$con=mysqli_connect("localhost","root","toor","tumblrrecommender");
			//if (TRUE) {
			//	$strurl = $_POST['clienturl'];
				//mysqli_query($con,"INSERT INTO 'queries'('latestclient') VALUES ($strurl)");
				$str2 = "java -jar " . '"'.$_SERVER['DOCUMENT_ROOT'].'/test_class.jar"';
				
				
				exec($str2);

				
				
				//echo $HOME;
			//}

			// Check connection

			?>
			<div id="result" class="cell"></div>
			
		</div>
		<div class="right">

		</div>
		
	</div>
	<div class="footer"></div>

</div>
</body>
</html>