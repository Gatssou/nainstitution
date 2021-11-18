<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mywbs';

$con = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()){
  exit('Failed to connect to MySQL: ' . mysqli_connect_errno());
}
if (!isset($_POST['user'], $_POST['pass'])){
  exit('Please fill bothh the username and passeword fields !');
}
if ($stmt = $con->prepare('SELECT id, pass FROM loginpage WHERE user = ?')){
  $stmt->bind_param('s', $_POST['user']);
  $stmt->execute();
  $stmt->store_result();
  $stmt->close();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	
	if (password_verify($_POST['password'], $password)) {
		
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: home.php');
	} else {
		echo 'Incorrect username and/or password!';
	}
} else {
	echo 'Incorrect username and/or password!';
}


?>