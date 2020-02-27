<?php  

if (isset($_SESSION['level'])) {

	$sesen_nama 	= $_SESSION['nama_lengkap'];

	$sesen_userid = $_SESSION['username'];

	$sesen_level = $_SESSION['level'];

	//$sesen_access 	= $_SESSION['access'];

} 

else {

	die("<script>alert('Anda tidak memiliki akses!');history.go(-1)</script>");

}



?>