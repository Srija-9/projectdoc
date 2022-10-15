<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mydb','SRIJA','1234');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_id'])){
	$sql="INSERT INTO usersev(name,email,password,user_id) VALUES (:name,:email,:password,:user_id)";
	echo("<pre>\n".$sql."\n</pre>\n");
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':name'=> $_POST['name'],':email'=>$_POST['email'],':password'=>$_POST['password'],':user_id'=>$_POST['user_id']));
}
?>
<html><head></head><body>
<p>Add A User</p>
<form method="post">
<p>Name:<input type="text" name="name" size="40"></p>
<p>Email:<input type="text" name="email"></p>
<p>Password:<input type="password" name="password"></p>
<p>User_id:<input type="text" name=user_id></p>
<p><input type="submit" value="Add New"/></p>
</form>
</body>
</html>
