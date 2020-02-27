<?php 

if (!isset($_SESSION['username'])) 

{

	echo "<script language='javascript'>alert('HARAP LOGIN DULU'); location.replace('index.php')</script>";

}

else {}

?>