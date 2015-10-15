<!DOCTYPE html>

<html>
<head>
	<title>Question - Simple StackExchange</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="header-page">
		<h1><a href="index.php">Simple StackExchange</a></h1>
	</div>

	<h3>What's your question?</h3>
	<hr>
	<?php 
		include('edit_question.php'); 
	?>
	<div class="question-form">
		<form action="add_question.php?id=<?php echo htmlspecialchars($_GET["id"]) ?>" method="post">
			<div><input type="text" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($Name); ?>"></div>
			<div><input type="text" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($Email); ?>"></div>
			<div><input type="text" id="topic" name="topic" placeholder="Topic" value="<?php echo htmlspecialchars($Topic); ?>"></div>
			<div><textarea id="content" name="content" placeholder="Content" rows="5" cols="40"><?php echo htmlspecialchars($Content); ?></textarea></div>
			<div><input id="postbutton" type="submit" value="Post"></div>
		</form>
	</div>
</body>
</html>