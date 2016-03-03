<?php

	//table.php

	//getting our config
	require_once("../../../config.php");

	//create connection
	$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_shikter");
	
	//SQL sentens
	$stmt = $mysql->prepare("SELECT id, recipient, message, sender, created FROM messages_sample ORDER BY created DESC LIMIT 10");
	
	//if error in sentence
	echo $mysql->error;
	
	//variables for data for each row we will get
	$stmt->bind_result($id, $recipient, $message, $sender, $created);

	//query
	$stmt->execute();
	
	// GET RESULT
	// we have multiple rows
	while($stmt->fetch()){
			
		// DO SOMETHING FOR EACH ROW
		echo $id." ".$message."<br>";
	
	}
	
?>

<a href="app.php">app</a>