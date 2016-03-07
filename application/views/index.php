<html>
<head>
	<title>Number Game</title>
</head>
<body>

<p>I'm thinking of a number between 1 and 100. Take a guess.</p>
	<form action="/main/process" method="post">
	<input type="text" name="guess">
	<input type="submit" name="Submit">
<p>
	<?php 
		if(isset($message))
		{
			echo $message;
		}
	?>
</p>
</form>
</body>
</html>