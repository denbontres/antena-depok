<?php

$id_ticket = mysqli_real_escape_string($koneksidb, $_GET['id_ticket']);

$sqlEd = "UPDATE mis_ticket SET id_ticket = '$id_ticket', 
                                        status      = 'progress',
                                        updater     = '$_SESSION[userid]', 
                                        jam_update  = now(),
                                        tgl_update  = now() 
                                        WHERE id_ticket = '$id_ticket' ";
                                
      if(mysqli_query($koneksidb, $sqlEd)) 
      {
        echo "<script>alert('Update data berhasil! Klik ok untuk melanjutkan');location.replace('?module=Data-Ticket')</script>";
      } 
        else 
        {
          echo "Error updating record: " . mysqli_error($koneksidb);
        }
?>