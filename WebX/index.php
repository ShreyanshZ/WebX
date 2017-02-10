<html>
<head>
<?php include('headr.php'); ?>
<title>ToDoDo</title>
</head>

<body>

<div class="row">
<div class="container">
	<div class="col-md-12">
		
	<h1 align="center">ToDoDo - Manage your ToDo List</h1>	
	</div>	
	</div>
</div>

<br/>

<div class="container">
<div class="row">

	
<div class="col-md-8 col-md-offset-2">  

<form action='login.php' method='post' name='loginform'>
    <div class="form-group">
        <input type="text" name = 'username' class="form-control input-lg" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name ='password' class="form-control input-lg" placeholder="Password">
    </div>
    <div class="form-group">
    	<input class="btn btn-primary btn-lg btn-block" type='submit' value='Login' name='login'>       
    </div>
</form>

 
</div>
</div>
<br/>
<div class="row">
<div class="container">
	</div>
</div>
<br/>
</div>


<div class="container">
<div class="row">

	
<div class="col-md-8 col-md-offset-2">  

<form action='register.php' method='post' name='registerform'>
    <div class="form-group">
        <input type="text" name = 'username' class="form-control input-lg" placeholder="Username">
    </div>

    
    <div class="form-group">
        <input type="password" name ='password' class="form-control input-lg" placeholder="Password">
    </div>

    <div class="form-group">
        <input type="text" name = 'email' class="form-control input-lg" placeholder="Email">
    </div>
    <div class="form-group">
    	<input class="btn btn-primary btn-lg btn-block" type='submit' value='Register' name='register'>       
    </div>
</form>
</div>
</div>
</div>



</div>
</body>
</html>