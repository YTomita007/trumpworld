<?php
	session_start();
	
	session_destroy();
	
	$title = "the Trump World";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title><?php echo $title; ?></title>
        <link rel="stylesheet" href="system/style.css">
	</head>
    <body class="backgroundbase">
		<div align="center">
			<h1><?php echo $title; ?></h1>
			<div class="form-box">
				<div class="commandline">
					<h2>★あそびたい トランプゲームを せんたくしてください★</h2>
				</div>
				<form action="system/controller.php" method="post">
					<input type="hidden" name="process" value="101">
					<div class="alternative">
						<h3>Black Jack</h3>
						<input type="radio" title="playmode" name="playmode" value="blackjack" id="blackjack" checked>
						<label for="blackjack">
							<img alt="Black Jack" src="system/images/blackjack.png">
						</label>
					</div>
					<div class="alternative">
						<h3>Royal Poker</h3>
						<input type="radio" title="playmode" name="playmode" value="royalpoker" id="royalpoker">
						<label for="royalpoker">
							<img alt="Royal Poker" src="system/images/poker.png">
						</label>
					</div>
					<div class="alternative">
						<h3>Memory Game</h3>
						<input type="radio" title="playmode" name="playmode" value="memorygame" id="memorygame">
						<label for="memorygame">
							<img alt="Memory Game" src="system/images/memorygame.png">
						</label>
					</div>
					<div class="alternative">
						<h3>Seven Rows</h3>
						<input type="radio" title="playmode" name="playmode" value="sevenrows" id="sevenrows">
						<label for="sevenrows">
							<img alt="Seven Rows" src="system/images/sevenrows.png">
						</label>
					</div>
					<div class="alternative">
						<h3>Klondike</h3>
						<input type="radio" title="playmode" name="playmode" value="klondike" id="klondike">
						<label for="klondike">
							<img alt="Klondike" src="system/images/klondike.png">
						</label>
					</div>
					<br><br><br><br>
					<button type="submit" class="button-1">けってい！</button>
				</form>
			</div>
        </div>
    </body>
</html>
	