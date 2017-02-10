<?php

/* login.php */
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	include 'db.php';

	extract($_POST);

	//username password

	$password = md5($password);

	$query = "SELECT * from users WHERE username = '$username'";

	$rs=$cxn->query($query);

	$rs->data_seek(0);

	$row = $rs->fetch_assoc();

	if($row['password'] == $password)
	{
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header('Location: pending.php');
		
	} 
	else
	{ ?>

		<html>
<head>
<?php include('headr.php'); ?>
<title>ToDoDo</title>
</head>

<body>

<div class="row">
<div class="container">
	<div class="col-md-12">
		<h2>Incorrect username or password. <a href='index.php'>Try again</a>


	</div>	
	</div>
</div>

</body>
</html>

<?php 
}

}

?>




