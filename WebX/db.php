<?php 

/* db.php */

$cxn = new mysqli("localhost","root","shrey","acm");

if($cxn->connect_error)
{
	echo "database connection failed";
}

?>