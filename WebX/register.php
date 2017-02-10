<html>
<head>
<?php include('headr.php'); ?>
<title>ToDoDo</title>
</head>

<body>

<div class="row">
<div class="container">
	<div class="col-md-12">
		
	<?php

/* register.php */


if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']))
{
	include 'db.php';

	foreach($_POST as $value)
	{	
		$value = strip_tags($value);
		$value = $cxn->real_escape_string($value);
	}

	extract($_POST);

	//username password

	$password = md5($password);

	$query = "INSERT into users (username,password,email) VALUES ('$username','$password','$email')";

	if($cxn->query($query) === false)
	{
		echo "<h2>Please try again.</h2>";
	}
	else
	{		
		echo"<h2 align='center'>Successfully Registered $username! <a href='index.php'>Login now</a></h2>";
	}


}

?>
		
	</div>	
	</div>
</div>

</body>
</html>

