<!Doctype html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<title>To Do</title>
		
<!-->		<link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao|Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
		<-->
	</head>
	
	<body>
		<div class="list">
			<h2 class="header">To Do</h2>
			
			<ul>
				<li><span class="item done">Einkaufen gehen</spand></li>
				<li><span class="item not done">Webanwendung Entwickeln</spand></li>
			</ul>
			
			<form class="item-add" action="add.php" method="post">
				<input type="text" name="name" placeholder="Neue Aufgabe" class="input" autocomplete="off" required>
				<input type="submit" value="Add" class="submit">
			</form>
	</body>
	
</html>