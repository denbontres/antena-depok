<?php  
 if (isset($_POST['btnSave'])) {

    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $tipe_file   = $_FILES['fupload']['type'];
    $nama_file   = $_FILES['fupload']['name'];
    $acak        = rand(1,99);
    $nama_gambar = $acak.$nama_file; 


    $txtSub    = mysqli_real_escape_string($koneksidb, $_POST['txtSub']);
    $kat       = mysqli_real_escape_string($koneksidb, $_POST['cmbkat']);
    $txtDesk   = mysqli_real_escape_string($koneksidb, $_POST['txtDesk']);






 }
?>