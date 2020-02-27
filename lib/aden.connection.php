<?php
# Konek ke Web Server Lokal
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "";
$myDbs	= "cms_adendb";

# Konek ke Web Server Lokal
$koneksidb	= mysqli_connect($myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

# Memilih database pd MySQL Server
//mysql_select_db($myDbs) or die ("Database not Found !");
?>