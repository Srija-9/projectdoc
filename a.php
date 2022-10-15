<?php
	$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mydb','SRIJA','1234');
	$stmt=$pdo->query("SELECT * FROM USER");
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		print_r($row);
	}
?>