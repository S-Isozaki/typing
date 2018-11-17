<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>typing</title>
	</head>

	<body>
		<h1>typing</h1>
		
		<h2>paste your favorite words here</h2>
		
		<form method="post">
			<input type="text" name="text" maxlength="1000">
			<input type="submit" value="start">
		</form>
		<?php
			if(isset($_POST['text'])){
				$text = $_POST['text'];
				echo $text;
			}
		?>
	</body>
</html>
