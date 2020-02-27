<?php  
if ($_GET) {
    if (isset($_POST['btnSave'])) {
      $txtNKat    = mysqli_real_escape_string($koneksidb, $_POST['txtNKat']);
      $kategori_seo  = seo_title($_POST['txtNKat']);
      //$createDate= date('Y-m-d H:i:s');

      $cekdata = "SELECT nama_kategori FROM tbl_kategori WHERE nama_kategori = '$txtNKat' ";
      $ada     = mysqli_query($koneksidb, $cekdata);
      if(mysqli_num_rows($ada) > 0)
      { 
        echo "<script>alert('ERROR: Kategori telah terdaftar, silahkan pakai Kategori lain!');history.go(-1)</script>";
      }
        else
        {
          // Proses insert data dari form ke db
          $sql = "INSERT INTO tbl_kategori (nama_kategori, kategori_seo, uploader, created_at) VALUES ('$txtNKat' , '$kategori_seo' , '$_SESSION[username]', now() )";

          if(mysqli_query($koneksidb, $sql)) 
          {
            echo "<script>alert('Insert data berhasil! Klik ok untuk melanjutkan');location.replace('?module=Data-Kategori')</script>";
          } 
            else 
            {
              echo "Error updating record: " . mysqli_error($koneksidb);
            }
        }
    }

}
?>
        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Form Kategori</a></li>
                <li class="active">Form Add</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Form Add <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            <!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Input Types</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="?module=Add-Kategori" method="post" name="frmadd" target="_self"> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Default Input</label>
                                    <div class="col-md-9">
                                        <input type="text" name="txtNKat" class="form-control" placeholder="Nama Kategori" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <button type="submit" name="btnSave" class="btn btn-sm btn-success">Save</button>&nbsp;&nbsp;
                                        <button type="reset" class="btn btn-sm btn-success">Clear</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-sm btn-success" onClick="document.location.href='cms.nw.php?page=Data-Kategori';">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->

        </div>
        <!-- end #content -->