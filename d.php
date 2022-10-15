<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mydb','SRIJA','1234');
if(isset($_POST['user_id'])){
	$sql="DELETE FROM usersev WHERE user_id=:zip";
	echo "<pre>\n$sql\n</pre>\n";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':zip'=>$_POST['user_id']));
}
?>
<p>Delete A User</p>
<form method="post"<p>ID to Delete:
<input type="text" name="user_id"></p>
<p><input type="submit" value="Delete"/></p>
</form>