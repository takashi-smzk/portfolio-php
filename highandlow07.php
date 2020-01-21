<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<div align = "center">
		<font size = "6">Hign＆Low </font>
		<hr>

		<?php
		  $card = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
		    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

		  $iNum = $_POST['leftcard'];
		  $hNum = $_POST['select'];
		  $rightcard = mt_rand(0,13);

          echo '<img src="../cards/',$card[$iNum],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
          echo '<img src="../cards/',$card[$rightcard],'">';
          echo '<br><br>';
          echo "「",$hNum,"」を選択しました。";
          echo "<br><br>";

          if ($iNum < $rightcard) {
              $result = "High";
          }elseif ($iNum > $rightcard){
              $result = "Low";
          }else {
              $result = $hNum;
          }

          if($hNum == $result){
              echo "You Win!";
          }else {
              echo "You Lose...";
          }

          echo '<br><br>';
		?>

		<a href= "hignAndlow.php">もう一度挑戦</a>

		</div>
	</body>
</html>
