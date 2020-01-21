<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<div align = "center">
		<font size = "6">Hign＆Low </font>
		<hr>

		<form action="hignAndlow07.php" method="post">

		<?php
		  $cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
		    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

		  $leftcard = mt_rand(0,13);

		  echo '<img src="../cards/',$cards[$leftcard],'";>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

		  echo '<img src="../cards/bg.png">';

		?>

		<?php
		  echo '<input type ="hidden" name="leftcard" value="',$leftcard,'"><br>';
		?>
		<input type="radio" name="select" value="High">High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="select" value="Low">Low
		<br>

		<input type="submit" value="決定">

		</form>
		</div>
	</body>
</html>
