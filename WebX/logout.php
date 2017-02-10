<?php

/* logout.php */
session_start();
session_destroy();

?>

<html>
<head>
<?php include('headr.php'); ?>
<title>ToDoDo</title>
</head>

<body>

<div class="row">
<div class="container">
	<div class="col-md-12">
		
	<h1 align="center">Successfully logged out! <a href='index.php'>Login again </a></h1>	
	</div>	
	</div>
</div>

</body>
</html>