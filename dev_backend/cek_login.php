<?php session_start(); 
include '../lib/aden.connection.php';

if (isset($_POST['btnLogin'])) 
{
	$error		= array();
	# Baca variabel form
	$txtUser	= mysqli_real_escape_string($koneksidb, $_POST['txtUser']);
	$txtPassword	= mysqli_real_escape_string($koneksidb, $_POST['txtPassword']);


	if (empty($txtUser) && empty($txtPassword)) 
	{
		echo "<script language='javascript'>alert('isikan username dan password'); location.replace('index.php')</script>";
	}
	elseif (empty($txtUser)) 
	{
		echo "<script language='javascript'>alert('isikan username'); location.replace('index.php')</script>";
	}
	elseif (empty($txtPassword)) 
	{
		echo "<script language='javascript'>alert('isikan password'); location.replace('index.php')</script>";
	}

	$sql 	= "SELECT * FROM tbl_users WHERE username='".$txtUser."' AND blokir='Y'";
	//echo $sql; die;
	$query 	= mysqli_query($koneksidb, $sql);
	//$hasil = mysqli_fetch_all($query);
	//echo '<pre>'; print_r($_POST); print_r($hasil); die;
	$data 	= mysqli_fetch_array($query);
	if (mysqli_num_rows($query) > 0)
	{
		if (password_verify($txtPassword, $data['password'])) 
		{
			#session login
			$_SESSION['username']    = $data['username'];   // id user
        	$_SESSION['nama_lengkap']       = $data['nama_lengkap'];      // nama user
        	$_SESSION['level']   	= $data['level'];  // tipe user
        	$_SESSION['lastlogin']  = date('Y-m-d H:i:s');

        	$sqlUser = "SELECT lastlogin FROM tbl_users WHERE username = '$_SESSION[username]'";
			$queryUser = mysqli_query($koneksidb, $sqlUser);
			$dtUser = mysqli_fetch_array($queryUser);
			mysqli_query($koneksidb, "UPDATE tbl_users SET lastlogin = now() WHERE username = '$_SESSION[username]'");

			// bikin id_session yang unik dan mengupdatenya agar slalu berubah 
		    // agar user biasa sulit untuk mengganti password Administrator 
		    $sid_lama = session_id();
			session_regenerate_id();
		    $sid_baru = session_id();
		    mysqli_query($koneksidb, "UPDATE tbl_users SET id_session='$sid_baru' WHERE username='".$txtUser."'");
		    // end session 

        	if ($data['level'] == 'user') 
        	{
        		echo "<script language='javascript'>alert('Anda berhasil Login sebagai User'); location.replace('cms.nw.php?module=Beranda')</script>";
        	}
        	elseif ($data['level'] == 'superadmin') 
        	{
        		echo "<script language='javascript'>alert('Anda berhasil Login sebagai Super Admin'); location.replace('cms.nw.php?module=Beranda')</script>";
        	}
		}

		else 
		{
			echo "<script>alert('PASSWORD SALAH!');history.go(-1)</script>";
		}
	}

	else 
	{
		echo "<script>alert('USERNAME yang Anda masukkan tidak terdaftar!');history.go(-1)</script>";
	}
}

else 
{
	echo "<script>alert('Pencet dulu tombolnya!');history.go(-1)</script>";
}

?>