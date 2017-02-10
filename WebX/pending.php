<!DOCTYPE html>
<html>
<head>
<?php include('headr.php'); ?>
	<title>Pending Items - ToDoDo</title>
</head>



<?php include('headr.php'); ?>



<?php

/* pending.php */

session_start();

if(!empty($_SESSION['id']))
{

	?>

	<body>

<div class="row">
<div class="container">
	<div class="col-md-6">
		
	<h1 align="center">View pending items</h1>
	</div>
	<div class="col-md-6">
	<a href="logout.php"><button type="button" class="btn btn-primary" style="margin-top:20px; right:100px; position:absolute">Logout</button></a>
	</div>	
	</div>
</div>

<br/>

	<?php
	
	include 'db.php';

	extract($_SESSION);

	if(!empty($_POST['item']))
	{
		include 'db.php';

		$_POST['item'] = $cxn->real_escape_string($_POST['item']);

		extract($_POST);

		$uid = $_SESSION['id'];

		$query = "INSERT into items (description,userid) VALUES ('$item', '$uid')";

		if($cxn->query($query) === false)
		{
			echo "<div class='alert alert-danger' role='alert'>Error adding item!</div>";
		}
		
	}

	
	echo'<h4>';
	if(!empty($_POST['submit']))
	{
		$type = ($_POST['submit'] == "Delete") ? 2 : 1;

		$list = $_POST['items'];

		$query = "UPDATE items set status = 1 where userid = $id and id = $list ";

		if($cxn->query($query) === false)
		{
			echo "error updating<br/>";
		}
		else
		{
			echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  Item marked as complete!
</div><br/>';
		}
	}
	echo'</h4>';

	$query = "SELECT * from items WHERE userid = $id and status = 0";

	$rs = $cxn->query($query);

	$rs->data_seek(0);
	$num = $rs->num_rows;

	
	echo"<div align='center' class='row tdlist'>";
	echo "$num pending item(s)<br/>
		<div align='center' class='col-md-8 col-md-offset-2'>
	";

	?>

	<div class="panel panel-default">
  
  <div class="panel-body">

<?php

	if($num==0)
	{
		echo "Nothing to see here! Perhaps, add an item?";
	}

	while($row = $rs->fetch_assoc())
	{
		extract($row);
		echo "<div align = 'center' class='listitems col-md-10'> $description</div>";
		echo "
		<form class='inl col-md-2' name='complete' method='post'>";
		echo "<input type='hidden' name='items' value='$id'>";
		echo "<input class='done' type='submit' name='submit' value='Done'>";
		echo "</form>";
		

	}
	

?>

 </div>
</div>

</div>



<div class="row">
  <div class="col-lg-6 col-lg-offset-3">
  <form method='post' name='additem'>
    <div class="input-group">
            <input type="text" name='item' class="form-control" placeholder="Add an item!">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" name='add' value='Add'>Add!</button>
      </span>
      
    </div><!-- /input-group -->
     </form>

  </div><!-- /.col-lg-6 -->
  </div>
 	


<?php

}
else
{
	echo "<h2>You must login to view pending items</h2>";
}

?>

</body>
</html>