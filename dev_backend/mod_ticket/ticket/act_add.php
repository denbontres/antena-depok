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

      /*------------------------------NOMOR OTOMATIS---------------------------------------*/
    // baca current date
    $today = date("Ym");

    // cari id_ticket yang berawalan tanggal hari ini
    $query = "SELECT max(id_ticket) AS last FROM mis_ticket WHERE id_ticket LIKE '$today%'";
    $hasil = mysqli_query($koneksidb, $query);
    $data  = mysqli_fetch_array($hasil);
    $lastCard = $data['last'];

    // baca nomor urut id_ticket dari id id_ticket terakhir
    $lastKdUrut = substr($lastCard, 8, 4);

    // nomor urut id_ticket ditambah 1
    $nextKdUrut = $lastKdUrut + 1;

    // membuat format nomor urut id_ticket berikutnya
    $nextKd = $today.sprintf('%04s', $nextKdUrut);
    /*----------------------------------NOMOR OTOMATIS-----------------------------------------*/

      
          // Proses insert data dari form ke db
        /* $sql = "INSERT INTO mis_ticket (id_ticket, subject, deskripsi, kategori, uploader, jam_upload, tgl_upload) VALUES ('$nextKd', '$txtSub', '$txtDesk', '$kat', '$_SESSION[userid]', now(), now() )";

          if(mysqli_query($koneksidb, $sql)) 
          {
            echo "<script>alert('Insert data berhasil! Klik ok untuk melanjutkan');location.replace('?module=Data-Ticket')</script>";
          } 
            else 
            {
              echo "Error updating record: " . mysqli_error($koneksidb);
            }

*/

 if (empty($lokasi_file)){

      $input = "INSERT INTO mis_ticket (id_ticket, subject, deskripsi, kategori, dept, uploader, jam_upload, tgl_upload) VALUES ('$nextKd', '$txtSub', '$txtDesk', '$kat', '$_SESSION[departemen]', '$_SESSION[userid]', now(), now() )";

      mysqli_query($koneksidb, $input);



      echo "<script>alert('Insert data berhasil! Klik ok untuk melanjutkan');location.replace('?module=Data-Ticket')</script>";

        } 

        

        // Apabila ada gambar yang di upload

    else{

      if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){

        echo "<script>window.alert('Upload Gagal! Pastikan file yang di upload bertipe *.JPG');

              window.location=('?module=Add-Ticket')</script>";

      }

      else{

        $folder = "upload/ticket/"; // folder untuk foto aplikasi

        $ukuran = 200;                     // foto diperkecil jadi 200px (thumb)

        UploadFoto($nama_gambar, $folder, $ukuran);



        $input = "INSERT INTO mis_ticket (id_ticket, subject, deskripsi, kategori, dept, uploader, jam_upload, tgl_upload, gambar) VALUES ('$nextKd', '$txtSub', '$txtDesk', '$kat', '$_SESSION[departemen]', '$_SESSION[userid]', now(), now(), '$nama_gambar' )";

        mysqli_query($koneksidb, $input);



        echo "<script>alert('Input data berhasil! Klik ok untuk melanjutkan');location.replace('?module=Data-Ticket')</script>";

      }

    }

        
    } //if post

?>